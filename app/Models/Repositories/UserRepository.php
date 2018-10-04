<?php

namespace App\Models\Repositories;

use App\Models\Entities\User;

class UserRepository extends AbstractRepository
{
    /**
     * Make new instance of this class
     *
     * @param \App\Models\Entities\User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
