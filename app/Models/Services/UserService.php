<?php

namespace App\Models\Services;

use App\Events\Registered;
use App\Models\Entities\Token;
use App\Models\Entities\User;
use App\Models\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserService
{
    private $carbon;

    private $userRepository;

    private $tokenService;

    public function __construct(UserRepository $userRepository, TokenService $tokenService, Carbon $carbon)
    {
        $this->userRepository = $userRepository;
        $this->tokenService = $tokenService;
        $this->carbon = $carbon;
    }

    public function create(Request $request)
    {
        $this->registered(
            $user = $this->userRepository->create($request->only(['name', 'email', 'password']))
        );

        return $user;
    }

    public function registered(User $user) : void
    {
        event(new Registered($user, $this->tokenService->createWithEntity($user)));
    }

    public function verify(Token $token)
    {
        $user = $this->userRepository->find($token->ref_id);

        if (! $user || ! is_null($user->email_verified_at)) {
            return false;
        }

        $user->email_verified_at = $this->carbon;
        return $this->tokenService->invalidate($token, $user->save());
    }
}
