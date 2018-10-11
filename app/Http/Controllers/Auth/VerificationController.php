<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

// Repositories
use App\Models\Repositories\TokenRepository;
use App\Models\Repositories\UserRepository;

// Requests
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ResetPasswordRequest;

class VerificationController extends Controller
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
//        return view('auth.verify-email')->with([
//            'token' => $request->input('token')
//        ]);
    }
}
