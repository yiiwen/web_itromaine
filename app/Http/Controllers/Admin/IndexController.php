<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Banner;


class IndexController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        //加载轮播图设置
        $data['bannserList'] = Banner::orderBy("sort","asc")->get();
        return view('admin/index',$data);
    }

    //banner 图设置
    public function setBannser(Request $request)
    {
        $bannerInfo = $request->bannerInfo;
        $bannerInfo = json_decode($bannerInfo);
        $total = count($bannerInfo->items);
        $count = 0;
        foreach ($bannerInfo->items as $item) {
            if (isset($item->id) && ($banner = Banner::find($item->id))) {
                if (isset($item->delete) && $item->delete) {
                    if ($banner->delete()) {
                        $count++;
                        continue;
                    }
                }
            } else {
                $banner = new Banner();
            }
            $banner->sort = $item->sort;
            $banner->path = $item->image;
            $banner->url = $item->url ?? "";
            $banner->alt_info = $item->alt ?? "";
            if ($banner->save())
                $count++;
        }
        return ['total'=>$total,'success'=>$count,'fail'=>$total-$count];
    }
}
