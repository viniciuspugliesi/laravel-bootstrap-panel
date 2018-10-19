<?php

namespace App\Config;

trait Environment
{
    /**
     * Check is local environment
     *
     * @return bool
     */
    protected function isLocal() : bool
    {
        return $this->getAppEnv() === 'local';
    }

    /**
     * Check is test environment
     *
     * @return bool
     */
    protected function isTest() : bool
    {
        return $this->getAppEnv() === 'test';
    }

    /**
     * Check is production environment
     *
     * @return bool
     */
    protected function isProd() : bool
    {
        return $this->getAppEnv() === 'production';
    }

    /**
     * Get APP_ENV
     *
     * @return string
     */
    private function getAppEnv() : string
    {
        return env('APP_ENV');
    }
}
