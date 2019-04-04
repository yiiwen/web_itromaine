<?php

namespace App\Http\Middleware;

use Closure;
use App\Library\ErrorResponse;

class CheckToken
{

    public function checkToken($authToken)
    {
        if (strlen($authToken) != 43)
        {  
            return false; 
        }
        $authCode = substr($authToken,0,32);
        $timestamp = substr($authToken,32,10);
        if (!is_numeric($timestamp))
        {
            return false;
        }
        $nowStamp = time();
        if ($nowStamp - $timestamp < 5)
        {
            $checkCode = md5(md5('www.itromaine.com') . $timestamp) . $timestamp . 'u';
            return $checkCode == $authToken;
        }
        return false;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->method() == 'OPTIONS')
        {
            return response("OPTIONS");
        }
        $userAgent = $request->userAgent();
        if (!$userAgent)
        {
            $error = new ErrorResponse(5000);
            return $error->error();
        }
        if (!$this->checkToken($request->headers->get('authorization')))
        {
            $error = new ErrorResponse(5001);
            return $error->error();
        }
        return $next($request);
    }
}
