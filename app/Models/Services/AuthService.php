<?php

namespace App\Models\Services;

use App\Guards\UserGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    use UserGuard;

    public function login(Request $request) : bool
    {
        return Auth::guard($this->getGuard())->attempt($request->only(['email', 'password']), $request->input('remember'));
    }

    public function logout() : void
    {
        Auth::guard($this->getGuard())->logout();
    }
}
