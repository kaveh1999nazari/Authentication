<?php

declare(strict_types=1);

namespace Cycle\Schema\Generator;

use Cycle\Schema\GeneratorInterface;
use Cycle\Schema\Registry;

/**
 * Declare table dropped (initiate diff calculation).
 */
final class ResetTables implements GeneratorInterface
{
    public function run(Registry $registry): Registry
    {
        foreach ($registry as $entity) {
            if (!$registry->hasTable($entity)) {
                continue;
            }

            $schema = $registry->getTableSchema($entity);
            if ($schema->exists()) {
                $state = $schema->getState();

                // clean up all indexes and columns
                foreach ($state->getForeignKeys() as $fk) {
                    $state->forgerForeignKey($fk);
                }

                // clean up all indexes and columns
                foreach ($state->getColumns() as $column) {
                    $state->forgetColumn($column);
                }

                foreach ($state->getIndexes() as $index) {
                    $state->forgetIndex($index);
                }

                $state->setPrimaryKeys([]);

                $schema->setState($state);
            }
        }

        return $registry;
    }
}
