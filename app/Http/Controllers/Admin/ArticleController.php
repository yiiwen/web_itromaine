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
    public function create(Request $request)
    {
        return view('admin/article',['type'=>$request->type]);
    }

    // 更新文章
    public function edit(Request $request)
    {
        $article = $this->model->getOne($request->id);
        return view('admin/article', ['article'=> $article]);
    }

    // 发表
    public function publish(Request $request)
    {
        $id = $request->id;
        $result = $this->model->publish($request->title, $request->articleContent, $request->firstImg, $request->sort, 1, $id);
        if ($result) {
            return ['error' => 'Normal', 'message' => $result];
        } else {
            return ['error' => 'update fail'];
        }
    }

    // 草稿箱
    public function drafts(Request $request)
    {
    }
}
