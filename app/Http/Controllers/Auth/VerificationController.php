<?php

namespace App\Http\Controllers\Auth;

use App\Guards\UserGuard;
use App\Http\Controllers\Controller;
use App\Models\Services\AuthService;
use App\Models\Services\TokenService;
use App\Models\Services\UserService;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    use UserGuard;

    /**
     * @var \App\Models\Services\UserService
     */
    private $userService;

    /**
     * @var \App\Models\Services\TokenService
     */
    private $tokenService;

    /**
     * @var \App\Models\Services\TokenService
     */
    private $authService;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Services\UserService $userService
     * @param \App\Models\Services\TokenService $tokenService
     * @param \App\Models\Services\AuthService $authService
     * @return void
     */
    public function __construct(UserService $userService, TokenService $tokenService, AuthService $authService)
    {
        $this->userService = $userService;
        $this->tokenService = $tokenService;
        $this->authService = $authService;
    }

    /**
     * Verify email
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function verify(Request $request)
    {
        $this->authService->logout();

        if (! $token = $this->tokenService->isValid($request->input('token', ''))) {
            return redirect('/login')->with('error', 'Token inválido.');
        }

        if (! $this->userService->verify($token)) {
            return redirect('/login')->with('error', 'Este email já foi verificado ou não existe não no sistema.');
        }

        return redirect('/login')->with('success', 'Email verificado com sucesso, você já pode fazer login.');
    }

    /**
     * Show unverified email view
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function unverified(Request $request)
    {
        return view('auth.unverified')->with([
            'user' => $request->user($this->getGuard()),
        ]);
    }

    /**
     * Resend verification email
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function resend(Request $request)
    {
        $this->userService->registered($request->user($this->getGuard()));

        return redirect()->back()->with('success', 'Foi enviado um email para ativação de seu cadastro.');
    }
}
