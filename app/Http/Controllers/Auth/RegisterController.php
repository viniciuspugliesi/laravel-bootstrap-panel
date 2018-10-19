<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Services\UserService;

class RegisterController extends Controller
{
    /**
     * @var \App\Models\Services\UserService
     */
    private $userService;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Services\UserService $userService
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request)
    {
        $this->userService->create($request);

        return redirect('/login')->with('success', 'Acesse seu email para ativar seu cadastro.');
    }
}
