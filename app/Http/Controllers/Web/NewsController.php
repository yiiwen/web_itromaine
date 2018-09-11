<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;

class NewsController extends Controller
{
    public function newsItem(Request $request,int $id)
    {
        $news = News::find($id);
        $prev = News::where("id","<",$id)->select("id","news_title")->orderBy("id","asc")->first();
        $next = News::where("id",">",$id)->select("id","news_title")->orderBy("id","asc")->first();
        return view('newsItem',['newsItem'=>$news,"prev"=>$prev,"next"=>$next]);
    }
}
