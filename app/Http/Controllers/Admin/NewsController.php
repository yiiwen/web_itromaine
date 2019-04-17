<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['news_status', '=', '1'];
        $condition[] = ['is_del', '=', '0'];
        $newsList = News::where($condition)->select(
            'id',
            'news_title',
            'news_content',
            'created_at',
            'short_url',
            'updated_at'
        )->paginate(10);
        return view('admin/news', ['newsList' => $newsList, 'keywords' => [
            'news_title' => $request->news_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }

    //草稿箱
    public function draftsList(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['news_status', '=', '2'];
        $condition[] = ['is_del', '=', '0'];
        $newsList = News::where($condition)->select(
            'id',
            'news_title',
            'news_content',
            'created_at',
            'short_url',
            'updated_at'
        )->paginate(10);
        return view('admin/news', ['newsList' => $newsList, 'keywords' => [
            'news_title' => $request->news_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }

    //回收站
    public function trash(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['is_del', '=', '1'];
        $newsList = News::where($condition)->select(
            'id',
            'news_title',
            'news_content',
            'created_at',
            'short_url',
            'updated_at'
        )->paginate(10);
        return view('admin/newsTrash', ['newsList' => $newsList, 'keywords' => [
            'news_title' => $request->news_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }
    
    //软删
    public function delete(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->is_del = 1;
        $news->save();
        return ['errno' => 0, 'id' => $id];
    }
    //恢复
    public function recovery(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->is_del = 0;
        return $news->save() ? ['errno' => 0, 'id' => $id] : ['errno' => 5000];
    }

    //清空回收站
    public function clear(Request $request)
    {
        $result = News::where('is_del', '=', 1)->delete();
        return $result ? ['errno' => 0] : ['errno' => 5000];
    }

    //彻底删除某一项
    public function dropItem(Request $request)
    {
        $news = News::find($request->id);
        $result = $news->delete();
        return $result ? ['errno' => 0] : ['errno' => 5000];
    }

}
