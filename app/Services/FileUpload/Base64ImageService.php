<?php

namespace App\Services\FileUpload;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Base64ImageService
{
    public function __construct()
    {
        //
    }


    public function store($file)
    {
        $base64File = "data:image/png;base64,".base64_encode(file_get_contents($file->path()));
        //$base64File = $file;
        if (!preg_match('/^data:(.*);base64,/', $base64File, $matches)) {
            return null;
        }
        $mimeType = $matches[1];
        $data = substr($base64File, strpos($base64File, ',') + 1);
        $data = base64_decode($data);
        
        if ($data === false) {
            return null;
        }
        $extension = explode('/', $mimeType)[1];
        $filename = Str::random(32) . '.' . $extension;
        $path = 'avatar/' . $filename;
        Storage::disk('public')->put($path, $data);
        return $path;
        //return Storage::url($path);
    }
}
