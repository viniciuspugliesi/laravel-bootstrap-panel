<?php

namespace App\Http\Controllers\Auth;

use App\Events\Registered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\TokenRepository;

class RegisterController extends Controller
{
    /**
     * @var \App\Models\Repositories\UserRepository
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request, TokenRepository $token)
    {
        $user = $this->user->create($request->only(['name', 'email', 'password']));

        event(new Registered(
            $user, $token->create(array_merge($user->toArray(), ['ref_table' => 'users', 'ref_id' => $user->id]))
        ));

        return redirect('/login')->with('success', 'Acesse seu email para ativar seu cadastro.');
    }
}
