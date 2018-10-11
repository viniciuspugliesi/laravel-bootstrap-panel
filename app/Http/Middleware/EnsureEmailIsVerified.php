<?php

namespace App\Http\Middleware;

use App\Models\Repositories\UserRepository;
use Closure;

class EnsureEmailIsVerified
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
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!$request->user($guard) && $this->user->hasVerifiedEmail($request->user($guard))) {
            return redirect('/verificar-email');
        }

        return $next($request);
    }
}
