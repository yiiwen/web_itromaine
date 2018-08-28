<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
        $loginInfo = $request->session()->get("loginInfo");
        if (!$loginInfo || $loginInfo['loginTime'] > time() + 10 * 60)
        {
            $loginInfo['loginTime'] = time();
            return redirect("/admin/login");
        }
        return $next($request);
    }
}
