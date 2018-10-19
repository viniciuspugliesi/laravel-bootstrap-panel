<?php

namespace App\Models\Services;

use App\Models\Entities\Entity;
use App\Models\Repositories\TokenRepository;
use Carbon\Carbon;

class TokenService
{
    private $carbon;

    private $tokenRepository;

    public function __construct(TokenRepository $tokenRepository, Carbon $carbon)
    {
        $this->tokenRepository = $tokenRepository;
        $this->carbon = $carbon;
    }

    public function createWithEntity(Entity $entity)
    {
        return $this->tokenRepository->create(
            $this->mergeData($entity)
        );
    }

    public function isValid(string $token)
    {
        if (! $token) {
            return false;
        }

        return $this->tokenRepository->findForToken($token);
    }

    public function invalidate(string $token, bool $proceed = false)
    {
        return ($proceed) ? $this->tokenRepository->invalidate($token) : false;
    }

    private function mergeData(Entity $entity)
    {
        return array_merge(
            $entity->toArray(),
            [
                'ref_table' => $entity->getTable(),
                'ref_id'    => $entity->id,
                'token'     => $this->generate()
            ]
        );
    }

    private function generate()
    {
        return bcrypt($this->carbon);
    }
}
