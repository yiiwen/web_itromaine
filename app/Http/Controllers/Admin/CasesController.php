<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cases;

class CasesController extends Controller
{
    public function index(Request $request)
    {
        $caseList = Cases::select("id","cases_title","cases_content","short_url",
        "created_at","updated_at")->paginate(10);
        return view('admin/cases',['caseList'=>$caseList,'keywords'=>['cases_title'=>$request->cases_title,
        'start_time'=>$request->start_time,'end_time'=>$request->end_time]]);
    }
}
