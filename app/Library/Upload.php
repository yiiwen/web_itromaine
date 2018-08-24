<?php

namespace App\Library;


define("IMAGE_FILE",1);
define("TEXT_FILE",2);

class Upload
{

    private $fileType = IMAGE_FILE;
    private $extension = ['png','jpg','gif','jpeg'];

    public function __construct($fileType = IMAGE_FILE)
    {
        $this->fileType = $fileType;
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
            } else {
                exit($request->$fileName->extension());
            }
        }
    }

    public function simpleUpload($request,$fileName)
    {
        return ['errno'=>0,'data'=>['hello world']];
    }
}