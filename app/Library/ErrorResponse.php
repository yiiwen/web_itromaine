<?php
namespace App\Library;


class ErrorResponse
{
    private $code;
    private $message = [
        '5000' => '非法访问！',
        '5001' => 'authorization 验证失败！'
    ];
    
    public function __construct($code)
    {
        $this->code = $code;
    }

    public function error()
    {
        return response(['code'=>$this->code,'message'=>$this->message[$this->code]]);
    }
}