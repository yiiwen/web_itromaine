<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public static function checkLogin($username,$password)
    {
        $adminInfo = self::where("username",'=',$username)->first();
        $password = md5('itromaine'.$password);
        return $password == $adminInfo->passwd ? $adminInfo : false;
    }

}
