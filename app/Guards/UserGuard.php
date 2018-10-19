<?php

namespace App\Guards;

trait UserGuard
{
    /**
     * @var string
     */
    private $guard = 'user';

    /**
     * Get guard
     *
     * @return string
     */
    protected function getGuard()
    {
        return $this->guard;
    }
}
