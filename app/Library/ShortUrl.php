<?php

namespace App\Library;
use Illuminate\Support\Facades\Redis;

class ShortUrl
{

    public static function pushUrl($key,$value)
    {
        return Redis::hSet('shortUrlMapping',$key,$value);
    }

    public static function getUrl($key)
    {
        return Redis::hGet('shortUrlMapping',$key);
    }
}