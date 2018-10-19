<?php

namespace App\Models\Repositories;

use App\Models\Entities\Token;

/**
 * @property Token $model
 */
class TokenRepository extends AbstractRepository
{
    /**
     * Make new instance of this class
     *
     * @param \App\Models\Entities\Token $model
     * @return void
     */
    public function __construct(Token $model)
    {
        $this->model = $model;
    }

    /**
     * Check token
     *
     * @param string $token
     * @return \App\Models\Entities\Token
     */
    public function findForToken(string $token)
    {
        return $this->model->where('token', $token)->first();
    }

    /**
     * Invalidate token
     *
     * @param string $token
     * @return bool
     */
    public function invalidate(string $token)
    {
        return $this->model->where('token', $token)->delete();
    }
}
