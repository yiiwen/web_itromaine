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
        $condition[] = ['cases_status','1'];
        $condition[] = ['is_del', '=', '0'];
        $list = Cases::where($condition)->select(
            "id",
            "cases_title",
            "cases_content",
            "short_url",
            "sort",
            "created_at",
            "updated_at"
        )->paginate(10);

        // 翻译为视图排序
        $common = new Common(); // 公共类
        $list = $common->viewSort($list);
        return view('admin/cases', ['list' => $list, 'keywords' => [
            'cases_title' => $request->cases_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }

    public function drafts(Request $request)
    {
        $id = $request->id ?: 0;
        if (!$id) {
            $cases = new Cases();
            $id = $cases->saveCases($request->title, $request->content, $request->first_image, $request->sort, 0);
            return ['errno' => 0, 'id' => $id];
        }
        $this->update(
            $request->title,
            $request->content,
            $request->first_image,
            $request->sort,
            0,
            $id
        );
        return ['errno' => 0, 'id' => $id];
    }

    //草稿箱
    public function draftsList(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['cases_status', '=', '0'];
        $condition[] = ['is_del', '=', '0'];
        $casesList = Cases::where($condition)->select(
            'id',
            'cases_title',
            'cases_content',
            'created_at',
            'short_url',
            'updated_at'
        )->paginate(10);
        return view('admin/cases', ['list' => $casesList, 'keywords' => [
            'cases_title' => $request->cases_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }

    //回收站
    public function trash(Request $request)
    {
        $condition = $request->search;
        $condition[] = ['is_del', '=', '1'];
        $casesList = Cases::where($condition)->select(
            'id',
            'cases_title',
            'cases_content',
            'created_at',
            'short_url',
            'updated_at'
        )->paginate(10);
        return view('admin/caseTrash', ['casesList' => $casesList, 'keywords' => [
            'cases_title' => $request->cases_title,
            'start_time' => $request->start_time, 'end_time' => $request->end_time
        ]]);
    }

    // 添加编辑
    public function publish(Request $request)
    {
        $id = $request->id ?: 0;
        if (!$id) {
            $cases = new Cases();
            $id = $cases->saveCases($request->title, $request->content, $request->first_image, $request->sort, 1);
            return ['errno' => 0, 'id' => $id];
        }
        $this->update(
            $request->title,
            $request->content,
            $request->first_image,
            $request->sort,
            1,
            $id
        );
        return ['errno' => 0, 'id' => $id];
    }

    // 编辑
    private function update($caseTitle, $casesContent, $firstImage, $sort, $caseStatus, $id)
    {
        $news = Cases::find($id);
        $news->cases_title   = $caseTitle;
        $news->cases_content = $casesContent;
        $news->first_image  = $firstImage;
        $news->cases_status = $caseStatus;
        $news->sort = $sort;
        $news->save();
    }

    //获取案例相信
    public function getOne(Request $request)
    {
        $id = $request->id;
        $caseInfo = Cases::find($id);
        return $caseInfo;
    }

    //软删
    public function delete(Request $request)
    {
        $id = $request->id;
        $case = Cases::find($id);
        $case->is_del = 1;
        $case->save();
        return ['errno' => 0, 'id' => $id];
    }

    //恢复
    public function recovery(Request $request)
    {
        $id = $request->id;
        $cases = Cases::find($id);
        $cases->is_del = 0;
        return $cases->save() ? ['errno' => 0, 'id' => $id] : ['errno' => 5000];
    }

    //清空回收站
    public function clear()
    {
        $result = Cases::where('is_del', '=', 1)->delete();
        return $result ? ['errno' => 0] : ['errno' => 5000];
    }

    //删除单项
    public function dropItem(Request $request)
    {
        $cases = Cases::find($request->id);
        $result = $cases->delete();
        return $result ? ['errno' => 0] : ['errno' => 5000];
    }

}
