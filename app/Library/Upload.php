<?php

namespace App\Library;


define("IMAGE_FILE",1);
define("TEXT_FILE",2);

class Upload
{

    private $fileType = IMAGE_FILE;
    private $extension = ['png','jpg','gif'];

    public function __construct($fileType = IMAGE_FILE)
    {
        $this->fileType = $fileType;
    }

    //图片裁切
    public function draw($width,$height)
    {

    }

    //图片缩放
    public function zoom($width,$height,$isRatio = True)
    {
        if (!isRatio)  //非等比缩放
        {

        } else {     

        }
    }

    public function upload($request,$fileName)
    {
        if ($this->fileType == IMAGE_FILE)
        {
            $filePath = $this->uploadImg($request,$fileName);
            return ['errno'=>0, 'data'=>[$filePath]];
        }
        if ($this->fileType == TEXT_FILE)
        {
            $filePath = $this->simpleUpload($request,$fileName);
            return ['errno'=>0, 'data'=>[$filePath]];
        }
    }

    //图片上传
    public function uploadImg($request, $fileName)
    {
        if ($request->hasFile($fileName))
        {
            if ($request->$fileName->isValid() && 
            in_array($request->$fileName->extension(),$this->extension))
            {
                $path = $request->$fileName->store('images','public');
                return '/storage/'.$path;
            }
        }
    }

    public function simpleUpload($request,$fileName)
    {
        return ['errno'=>0,'data'=>['hello world']];
    }
}