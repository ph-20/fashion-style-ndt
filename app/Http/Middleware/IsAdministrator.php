<?php

namespace Shop\Http\Middleware;

use Closure;
use Shop\User;
use Auth;

class IsAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);

            if ($user->role != 0 && $user->role != 1) {
                return redirect()->route('error404')->with('message', 'Bạn không có quyền vào trang này.');
            }
        } else {
            return redirect()->route('getLogin');
        }
        return $next($request);
    }
}
