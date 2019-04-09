<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Banner;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $newsList = News::orderBy("id","desc")->limit(6)->get();
        $bannerList = Banner::orderBy("sort","asc")->where('is_mobile','0')->get();
        return view('index',['newsList'=>$newsList,'bannerList'=>$bannerList]);
    }
}
