<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Model\Admin;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        Cookie::queue(Cookie::make('itromaineCode',md5(time())));
        return view("admin/login");
    }

    public function loginHandle(Request $request)
    {
        if ($request->cookie('itromaineCode'))
        {
            $result = Admin::checkLogin($request->username,$request->password);
            if ($result)
            {
                $request->session()->put('loginInfo',['username'=>$result->username,'loginTime'=>time()]);
                return redirect("/admin/index");
            }
            else
            {
                return redirect("/admin/login");
            }
        }
    }

    public function loginOut(Request $request)
    {
        $request->session()->put('loginInfo',['username'=>$result->username,'loginTime'=>time()+10 * 60]);
    }
}
