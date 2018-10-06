<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// Requests
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * @var string
     */ 
    private $guard = 'auth';
    
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
        if (!Auth::guard($this->getGuard())->attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withError('Erro na checagem dos dados.');
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
    
    /**
     * Get guard
     * 
     * @return string
     */ 
    private function getGuard()
    {
        return $this->guard;
    }
}
