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
        return view('newsItem',['newsItem'=>$news]);
    }
}
