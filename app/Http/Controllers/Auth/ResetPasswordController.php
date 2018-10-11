<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

// Repositories
use App\Models\Repositories\TokenRepository;
use App\Models\Repositories\UserRepository;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ResetPasswordRequest;

class ResetPasswordController extends Controller
{
    /**
     * @var \App\Models\Repositories\TokenRepository
     */
    private $token;

    /**
     * @var \App\Models\Repositories\UserRepository
     */
    private $user;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Repositories\TokenRepository $token
     * @param \App\Models\Repositories\UserRepository $user
     * @return void
     */
    public function __construct(TokenRepository $token, UserRepository $user)
    {
        $this->token = $token;
        $this->user = $user;
    }

    /**
     * Show view confirm new pass
     *
     * @param \Illuminate\Http\Request $request
     * @method post
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function index(Request $request)
    {
        if (!$this->token->check($request->input('token', ''))) {
            return redirect('/esqueceu-sua-senha')->withError('Token inválido.');
        }

        return view('auth.reset-password')->with([
            'token' => $request->input('token')
        ]);
    }

    /**
     * Set new pass
     *
     * @param \App\Http\Requests\Auth\ResetPasswordRequest $request
     * @method post
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function store(ResetPasswordRequest $request)
    {
        $user = $this->user->forEmail($request->input('email'));

        if (!$this->token->checkWithUser($request->input('token'), ['user_id' => $user->id])) {
            return redirect('/esqueceu-sua-senha')->withError('Token inválido.');
        }

        $status = $this->token->invalidate(
            $request->input('token'), $this->user->setPass($request->all())
        );

        return ($status)
            ? redirect('/login')->withSuccess('Senha alterada com sucesso.')
            : redirect()->back()->withError('Não foi possível alterar a senha, tente novamente.');
    }
}
