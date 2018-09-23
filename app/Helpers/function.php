<?php
use App\Model\Site;


if (!function_exists('site_config')) {
    function site_config($key)
    {
        $siteConfig = Site::find(1);
        if (property_exists(Site::class,$key))
            return $siteConfig->$key;
        return $siteConfig->$key;
    }
}