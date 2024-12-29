<?php

namespace App\Domain\Repository;

use App\Domain\Entity\User;
use Cycle\ORM\Select;
use Cycle\ORM\Select\Repository;

class UserRepository extends Repository
{
    public function __construct(Select $select)
    {
        parent::__construct($select);
    }

    public function findByMobile(string $mobile): ?User
    {
        return $this->findOne(['mobile' => $mobile]);
    }
}
