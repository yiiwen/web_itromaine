<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $listNews = News::orderBy("id","desc")->
        select("id",'news_title','abstract','created_at')->paginate(10);
        return view('news',['listNews'=>$listNews]);
    }

    public function newsItem(Request $request,int $id)
    {
        $news = News::find($id);
        $prev = News::where("id","<",$id)->select("id","news_title")->orderBy("id","asc")->first();
        $next = News::where("id",">",$id)->select("id","news_title")->orderBy("id","asc")->first();
        return view('newsItem',['newsItem'=>$news,"prev"=>$prev,"next"=>$next]);
    }
}
