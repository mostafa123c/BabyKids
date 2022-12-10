<?php

namespace App\Http\Traits;

trait imagestrait{

    private function uploadimage($file , $filename , $path , $oldfile =null)
    {
        $file->move(public_path('images/' .$path),$filename);
        if(!is_null($oldfile))
        {
            unlink(public_path($oldfile));
        }
        return true;
    }
}
