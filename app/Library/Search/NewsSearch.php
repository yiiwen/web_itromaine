<?php

namespace App\Library\Search;
use Illuminate\Http\Request;

class NewsSearch implements SearchImpl
{
    public function handle(Request $request)
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
        $request->search = $condition;
    }
}
