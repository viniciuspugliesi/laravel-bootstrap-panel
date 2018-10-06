<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

// Repositories
use App\Models\Repositories\TokenRepository;
use App\Models\Repositories\UserRepository;

// Requests
use App\Http\Requests\Auth\ForgotPasswordRequest;

// Mails
use Illuminate\Mail\Mailer;
use App\Mail\RecoverPassword\SendUser;

class ForgotPasswordController extends Controller
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
     * Register and send mail for recover password
     * 
     * @param \App\Http\Requests\Auth\ForgotPasswordRequest $request
     * @param \Illuminate\Mail\Mailer $mail
     * @method post
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function store(ForgotPasswordRequest $request, Mailer $mail)
    {
        $user = $this->user->forEmail($request->input('email'));
        
        $mail->send(new SendUser(
            $user, $this->token->create(array_merge($user->toArray(), ['user_id' => $user->id]))
        ));
        
        return redirect()->back()->withSuccess('Dentro de instantes, você receberá um email com instruções de como criar uma nova senha.');
    }
}
