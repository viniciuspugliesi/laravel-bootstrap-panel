<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Guards\UserGuard;

class LoginController extends Controller
{
    use UserGuard;

    /**
     * Show login form
     *
     * @method get
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Login user
     *
     * @method post
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function login(LoginRequest $request)
    {
        if (! Auth::guard($this->getGuard())->attempt($request->only(['email', 'password']), $request->input('remember'))) {
            return redirect()->back()->with('error', 'Email e senha não coincidem.');
        }

        return redirect('/');
    }

    /**
     * Logout user
     *
     * @method get
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function logout()
    {
        Auth::guard($this->getGuard())->logout();

        return redirect('/login');
    }
}
