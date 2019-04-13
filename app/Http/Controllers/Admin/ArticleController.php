<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Cases;
use App\Model\Solution;

class ArticleController extends Controller
{
    private $model = NULL;

    public function __construct(Request $request)
    {
        if ($request->type == 'news') {
            $this->model = new News();
        }
        if ($request->type == 'case') {
            $this->model = new Cases();
        }
        if ($request->type == 'solution') {
            $this->model = new Solution();
        }
    }

    //创建文章表单
    public function index(Request $request)
    {
        return view('admin/article');
    }

    // 发表
    public function publish(Request $request)
    {
        // return "hello world";
        $id = $request->id;
        $this->model->publish($request->title, $request->content, $request->firstImg, $request->sort, 1, $id);
        return "hello world";
    }

    // 草稿箱
    public function drafts(Request $request)
    { }
}
