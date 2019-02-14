<?php

namespace App\Http\Controllers\Admin;

use App\Library\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cases;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['is_del','=','0'];
        $list = Cases::where($condition)->select("id","cases_title","cases_content","short_url","sort",
        "created_at","updated_at")->paginate(10);

        // 翻译为视图排序
        $common = new Common(); // 公共类
        $list = $common->viewSort($list);
        return view('admin/cases',['list'=>$list,'keywords'=>['cases_title'=>$request->cases_title,
        'start_time'=>$request->start_time,'end_time'=>$request->end_time]]);
    }

    // 添加编辑
    public function publish(Request $request)
    {
        exit;
        $id = $request->id ?: 0;
        if (!$id)
        {
            $cases = new Cases();
            $id = $cases->saveCases($request->title,$request->content,$request->first_image,$request->sort,1);
            return ['errno'=>0,'id'=>$id];
        }
        $this->update($request->news_title,$request->abstract,$request->news_content,
            $request->first_image,$request->sort,1,$id);
        return ['errno'=>0,'id'=>$id];
    }

    // 编辑
    private function update($newsTitle,$newsAbstract,$newsContent,$firstImage,$sort,$newsStatus,$id)
    {
        $news = Cases::find($id);
        $news->news_title   = $newsTitle;
        $news->abstract = $newsAbstract;
        $news->news_content = $newsContent;
        $news->first_image  = $firstImage;
        $news->news_status = $newsStatus;
        $news->sort = $sort;
        $news->save();
    }
}
