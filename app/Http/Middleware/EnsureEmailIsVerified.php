<?php

namespace App\Http\Middleware;

use App\Models\Repositories\UserRepository;
use Closure;

class EnsureEmailIsVerified
{
    /**
     * @var \App\Models\Repositories\UserRepository
     */
    private $user_repository;

    /**
     * Make new instance of this class
     *
     * @param \App\Models\Repositories\UserRepository $user_repository
     * @return void
     */
    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \Closure  $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (! $request->user($guard) || ! $this->user_repository->hasVerifiedEmail($request->user($guard))) {
            return redirect('/verificar-email');
        }

        return $next($request);
    }
}
