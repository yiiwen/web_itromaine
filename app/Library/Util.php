<?php

namespace App\Library;

define('SHORT_URL_LENGTH',7);

class Util
{
    /**
     * 生成短链
     */
    public static function createShortUrl()
    {
        $chs = [];
        for ($i=0; $i<SHORT_URL_LENGTH; $i++)
        {
            $charType = mt_rand(1,3);
            if ($charType == 1)
            {
                $chr[$i] = chr(mt_rand(48,57));
                continue;
            }
            if ($charType == 2)
            {
                $chr[$i] = chr(mt_rand(65,90));
                continue;
            }
            if ($charType == 3)
            {
                $chr[$i] = chr(mt_rand(97,122));
                continue;
            }
        }

        return implode('',$chr);
    }
}
