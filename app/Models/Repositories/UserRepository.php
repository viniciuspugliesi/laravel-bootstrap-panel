<?php

namespace App\Models\Repositories;

use App\Models\Entities\User;

/**
 * @property User $model
 */
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

    /**
     * Check has verified email
     *
     * @param \App\Models\Entities\User $user
     * @return bool
     */
    public function hasVerifiedEmail(User $user) : bool
    {
        return ! is_null($user->email_verified_at);
    }

    /**
     * Create new register
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);

        return $this->model->forceCreate($data);
    }
}
