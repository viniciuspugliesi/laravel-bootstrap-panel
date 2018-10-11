<?php

namespace App\Models\Repositories;

use App\Models\Entities\Token;
use Carbon\Carbon;

/**
 * @property Token $model
 */
class TokenRepository extends AbstractRepository
{
    /**
     * @var \Carbon\Carbon
     */
    private $carbon;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Entities\Token $model
     * @return void
     */
    public function __construct(Token $model, Carbon $carbon)
    {
        $this->model  = $model;
        $this->carbon = $carbon;
    }

    /**
     * Create new register
     *
     * @paran array $data
     * @return \App\Models\Entities\Token
     */
    public function create(array $data)
    {
        $data['token'] = bcrypt($data['email'] . $this->carbon);
        $data['token'] = str_replace('/','', $data['token']);

        return parent::create($data);
    }

    /**
     * Check token
     *
     * @param string $token
     * @return bool
     */
    public function check(string $token)
    {
        return $this->model->where('token', $token)->get()->isNotEmpty();
    }

    /**
     * Check token with user
     *
     * @param string $token
     * @param array $data
     * @return bool
     */
    public function checkWithUser(string $token, array $data)
    {
        return $this->model->where('token', $token)->where($data)->get()->isNotEmpty();
    }

    /**
     * Invalidate token
     *
     * @param string $token
     * @param bool $proceed
     * @return bool
     */
    public function invalidate(string $token, bool $proceed = false)
    {
        return ($proceed) ? $this->model->where('token', $token)->delete() : false;
    }
}
