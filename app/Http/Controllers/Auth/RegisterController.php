<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

// Requests
use App\Http\Requests\Auth\RegisterRequest;

// Repositories
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\TokenRepository;

// Mail
use Illuminate\Mail\Mailer;
use App\Mail\Auth\SendRegistration;

class RegisterController extends Controller
{
    /**
     * @var
     */
    private $user;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Repositories\UserRepository $user
     * @return void
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Display register user view.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param \App\Http\Requests\Auth\RegisterRequest $request
     * @param \App\Models\Repositories\TokenRepository $token
     * @param \Illuminate\Mail\Mailer $mail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request, TokenRepository $token, Mailer $mail)
    {
        $user = $this->user->create($request->all());

        $mail->send(new SendRegistration(
            $user, $token->create(array_merge($user->toArray(), ['ref_table' => 'users', 'ref_id' => $user->id]))
        ));

        return redirect()->back()->withSuccess('Acesse seu email para ativar seu cadastro.');
    }
}
