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

if (!function_exists('toHtml')) {
    function toHtml($type,$name,$content) {
        $runtimePath = storage_path() . DIRECTORY_SEPARATOR . 'runtime';
        if (!file_exists($runtimePath)) {
            mkdir($runtimePath);
        }
        $htmlPath = $runtimePath . DIRECTORY_SEPARATOR . $type;
        if (!file_exists($htmlPath)) {
            mkdir($htmlPath);
        }
        file_put_contents($htmlPath . DIRECTORY_SEPARATOR . $name . '.html',$content);
    }
}

if (!function_exists('getHtml')) {
    function getHtml($type,$name) {
        $path = storage_path() . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 
        $type . DIRECTORY_SEPARATOR;
        $fileName = $path . $name . '.html';
        return file_exists($fileName) ? file_get_contents($fileName) : false;
    }
}

if (!function_exists('clearFile')) {
    function clearFile ($path) {
        if (is_file($path)) {
            return unlink($path);
        }
        if (is_dir($path)) {
            if (($handle = opendir($path)) !== false) {
                while (($file = readdir($handle)) !== false) {
                    if ($file != '.' && $file != '..')
                        clearFile($path . DIRECTORY_SEPARATOR . $file);
                }
                closedir($handle);//要先关闭才能删除上级目录
                rmdir($path);
            }
        }
    }
}
