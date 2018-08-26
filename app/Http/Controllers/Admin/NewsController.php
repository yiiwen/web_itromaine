<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $condition = $this->search($request);
        $condition[] = ['news_status','=','1'];
        $condition[] = ['is_del','=','0'];
        $newsList = News::where($condition)->select('id','news_title',
        'news_content','created_at','short_url','updated_at')->paginate(10);
        return view('admin/news',['newsList'=>$newsList,'keywords'=>['news_title'=>$request->news_title,
        'start_time'=>$request->start_time,'end_time'=>$request->end_time]]);
    }

    //草稿箱
    public function draftsList(Request $request)
    {
        $condition = $this->search($request);
        $condition[] = ['news_status','=','0'];
        $condition[] = ['is_del','=','0'];
        $newsList = News::where($condition)->select('id','news_title',
        'news_content','created_at','short_url','updated_at')->paginate(10);
        return view('admin/news',['newsList'=>$newsList,'keywords'=>['news_title'=>$request->news_title,
        'start_time'=>$request->start_time,'end_time'=>$request->end_time]]);
    }

    public function publish(Request $request)
    {
        $id = $request->news_id ?: 0;
        if (!$id)
        {
            $news = new News();
            $id = $news->saveNews($request->news_title,$request->news_content,
            $request->first_image,$request->sort,1);
            return ['errno'=>0,'id'=>$id];
        }
        $this->update($request->news_title,$request->news_content,
        $request->first_image,$request->sort,1,$id);
        return ['errno'=>0,'id'=>$id];
    }

    public function drafts(Request $request)
    {
        $id = $request->news_id ?: 0;
        if (!$id)
        {
            $news = new News();
            $id = $news->saveNews($request->news_title,$request->news_content,
            $request->first_image,$request->sort,0);
            return ['errno'=>0,'id'=>$id];
        }
        $this->update($request->news_title,$request->news_content,
        $request->first_image,$request->sort,0,$id);
        return ['errno'=>0,'id'=>$id];
    }

    public function getOne(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        return $news;
    }

    //软删
    public function delete(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->is_del = 1;
        $news->save();
        return ['errno'=>0,'id'=>$id];
    }
    //恢复
    public function recovery(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->is_del = 0;
        $news->save();
        return ['errno'=>0,'id'=>$id];
    }

    //回收站
    public function trash(Request $request)
    {
        $condition = $this->search($request);
        $condition[] = ['is_del','=','1'];
        $newsList = News::where($condition)->select('id','news_title',
        'news_content','created_at','short_url','updated_at')->paginate(10);
        return view('admin/newsTrash',['newsList'=>$newsList,'keywords'=>['news_title'=>$request->news_title,
        'start_time'=>$request->start_time,'end_time'=>$request->end_time]]);
    }

    private function update($newsTitle,$newsContent,$firstImage,$sort,$newsStatus,$id)
    {
        $news = News::find($id);
        $news->news_title   = $newsTitle;
        $news->news_content = $newsContent;
        $news->first_image  = $firstImage;
        $news->news_status = $newsStatus;
        $news->sort = $sort;
        $news->save(); 
    }

    private function search(Request $request)
    {
        $newsTitle = $request->news_title ?: null;
        $startTime = $request->start_time ?: null;
        $endTime   = $request->end_time ?: null;
        $condition = [];
        if ($newsTitle)
        {
            $condition[] = ['news_title','like','%'.$newsTitle .'%'];
        }
        if ($startTime && $endTime)
        {
            $condition[] = ['created_at','>',$startTime];
            $condition[] = ['created_at','<',$endTime];
        } 
        else if($startTime)
        {
            $condition[] = ['created_at','>',$startTime];
        }
        else if ($endTime)
        {
            $condition[] = ['created_at','<',$startTime];
        }
        return $condition;
    }
}
