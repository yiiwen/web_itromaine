<?php
namespace App\Library;

class Message
{
    public static function success(String $msg='', Array $data=[])
    {
        $result['code'] = 200;
        $result['msg'] = $msg ?: '操作成功';
        $result['data'] = $data ?: [];
        return $result;
    }

    public static function error(String $msg='')
    {
        $result['code'] = 5000;
        $result['msg'] = $msg ?: '操作失败';
        return $result;
    }
}