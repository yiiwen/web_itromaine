<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //清除静态化页面
    public function clear()
    {
        $runtimePath = storage_path() . DIRECTORY_SEPARATOR . 'runtime';
        clearFile($runtimePath);
        return ['error'=> 0];
    }
}
