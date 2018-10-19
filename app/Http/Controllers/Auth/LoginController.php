<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Services\AuthService;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * @var \App\Models\Services\AuthService
     */
    private $authService;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Services\AuthService $authService
     * @return void
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

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
        if (! $this->authService->login($request)) {
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
        $this->authService->logout();

        return redirect('/login');
    }
}
