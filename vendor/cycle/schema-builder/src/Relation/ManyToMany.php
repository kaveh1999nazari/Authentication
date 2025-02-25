<?php

declare(strict_types=1);

namespace Cycle\Schema\Relation;

use Cycle\ORM\Relation;
use Cycle\Schema\Definition\Entity;
use Cycle\Schema\Exception\RelationException;
use Cycle\Schema\InversableInterface;
use Cycle\Schema\Registry;
use Cycle\Schema\Relation\Traits\FieldTrait;
use Cycle\Schema\Relation\Traits\ForeignKeyTrait;
use Cycle\Schema\RelationInterface;

final class ManyToMany extends RelationSchema implements InversableInterface
{
    use FieldTrait;
    use ForeignKeyTrait;

    // internal relation type
    protected const RELATION_TYPE = Relation::MANY_TO_MANY;

    // relation schema options
    protected const RELATION_SCHEMA = [
        // save with parent
        Relation::CASCADE => true,

        // do not pre-load relation by default
        Relation::LOAD => Relation::LOAD_PROMISE,

        // nullable by default
        Relation::NULLABLE => false,

        // custom where condition
        Relation::WHERE => [],

        // custom orderBy rules
        Relation::ORDER_BY => [],

        // inner key of parent record will be used to fill "THROUGH_INNER_KEY" in pivot table
        Relation::INNER_KEY => '{source:primaryKey}',

        // we are going to use primary key of outer table to fill "THROUGH_OUTER_KEY" in pivot table
        // this is technically "inner" key of outer record, we will name it "outer key" for simplicity
        Relation::OUTER_KEY => '{target:primaryKey}',

        // through entity role name
        Relation::THROUGH_ENTITY => null,

        // name field where parent record inner key will be stored in pivot table, role + innerKey
        // by default
        Relation::THROUGH_INNER_KEY => '{source:role}_{innerKey}',

        // name field where inner key of outer record (outer key) will be stored in pivot table,
        // role + outerKey by default
        Relation::THROUGH_OUTER_KEY => '{target:role}_{outerKey}',

        // custom pivot where
        Relation::THROUGH_WHERE => [],

        // default collection.
        Relation::COLLECTION_TYPE => null,

        // rendering options
        RelationSchema::INDEX_CREATE => true,
        RelationSchema::FK_CREATE => true,
        RelationSchema::FK_ACTION => 'CASCADE',
        RelationSchema::FK_ON_DELETE => null,
    ];

    /**
     * @psalm-suppress PossiblyNullArgument
     */
    public function compute(Registry $registry): void
    {
        parent::compute($registry);

        $source = $registry->getEntity($this->source);
        $target = $registry->getEntity($this->target);
        $throughEntity = $this->options->get(Relation::THROUGH_ENTITY);

        if ($throughEntity === null) {
            throw new RelationException(sprintf(
                'Relation ManyToMany must have the throughEntity declaration (%s => ? => %s).',
                $source->getRole(),
                $target->getRole(),
            ));
        }

        $through = $registry->getEntity($throughEntity);

        if ($registry->getDatabase($source) !== $registry->getDatabase($target)) {
            throw new RelationException(sprintf(
                'Relation ManyToMany can only link entities from same database (%s, %s).',
                $source->getRole(),
                $target->getRole(),
            ));
        }

        if ($registry->getDatabase($source) !== $registry->getDatabase($through)) {
            throw new RelationException(sprintf(
                'Relation ManyToMany can only link entities from same database (%s, %s)',
                $source->getRole(),
                $through->getRole(),
            ));
        }

        $this->normalizeContextFields($source, $target);
        $this->normalizeContextFields($source, $through, ['innerKey', 'outerKey', 'throughInnerKey', 'throughOuterKey']);

        $this->createRelatedFields(
            $source,
            Relation::INNER_KEY,
            $through,
            Relation::THROUGH_INNER_KEY,
        );

        $this->createRelatedFields(
            $target,
            Relation::OUTER_KEY,
            $through,
            Relation::THROUGH_OUTER_KEY,
        );
    }

    public function render(Registry $registry): void
    {
        $source = $registry->getEntity($this->source);
        $target = $registry->getEntity($this->target);

        $through = $registry->getEntity($this->options->get(Relation::THROUGH_ENTITY));

        $sourceFields = $this->getFields($source, Relation::INNER_KEY);
        $targetFields = $this->getFields($target, Relation::OUTER_KEY);

        $throughSourceFields = $this->getFields($through, Relation::THROUGH_INNER_KEY);
        $throughTargetFields = $this->getFields($through, Relation::THROUGH_OUTER_KEY);

        $table = $registry->getTableSchema($through);

        if ($this->options->get(self::INDEX_CREATE)) {
            $index = array_merge($throughSourceFields->getColumnNames(), $throughTargetFields->getColumnNames());
            if (count($index) > 0 && !$this->hasIndex($table, $index)) {
                $table->index($index)->unique(!$this->hasIndex($table, $index, strictOrder: false, unique: true));
            }
        }

        if ($this->options->get(self::FK_CREATE)) {
            $this->createForeignCompositeKey(
                $registry,
                $source,
                $through,
                $sourceFields,
                $throughSourceFields,
                $this->options->get(self::INDEX_CREATE),
            );
            $this->createForeignCompositeKey(
                $registry,
                $target,
                $through,
                $targetFields,
                $throughTargetFields,
                $this->options->get(self::INDEX_CREATE),
            );
        }
    }

    /**
     *
     * @return Entity[]
     */
    public function inverseTargets(Registry $registry): array
    {
        return [
            $registry->getEntity($this->target),
        ];
    }

    /**
     *
     * @throws RelationException
     *
     */
    public function inverseRelation(RelationInterface $relation, string $into, ?int $load = null): RelationInterface
    {
        if (!$relation instanceof self) {
            throw new RelationException('ManyToMany relation can only be inversed into ManyToMany');
        }

        if (!empty($this->options->get(Relation::THROUGH_WHERE)) || !empty($this->options->get(Relation::WHERE))) {
            throw new RelationException('Unable to inverse ManyToMany relation with where scope.');
        }

        return $relation->withContext(
            $into,
            $this->target,
            $this->source,
            $this->options->withOptions([
                Relation::LOAD => $load,
                Relation::INNER_KEY => $this->options->get(Relation::OUTER_KEY),
                Relation::OUTER_KEY => $this->options->get(Relation::INNER_KEY),
                Relation::THROUGH_INNER_KEY => $this->options->get(Relation::THROUGH_OUTER_KEY),
                Relation::THROUGH_OUTER_KEY => $this->options->get(Relation::THROUGH_INNER_KEY),
            ]),
        );
    }
}
