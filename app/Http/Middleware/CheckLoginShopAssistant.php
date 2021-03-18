<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class CheckLoginShopAssistant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard()->check()) {
            return redirect()->route('shop_assistant.login');
        }

        if (Auth::user()->role != User::ROLE_SELL) {
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}
