<?php

namespace App\Traits;

trait UploadTrait
{

    public function uploadFile($file, $file_path){

        $fileName = $file->getClientOriginalName().time().'.'.$file->extension();

        $file->move(public_path($file_path), $fileName);

        return $fileName;
        
    }
}