<?php

namespace App\Services\FileUpload;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    
    public function store(object $file, string $path): ?string
    {
       
        if (!empty($file)) {            
            return $file->store($path);
        }
        return null;
    }

    public function move(string $from, string $to): bool
    {
        return Storage::move($from, $to);
    }

    public function info(object $file): ?FileInfo
    {
        if (!empty($file)) {
            $name = $file->getClientOriginalName();
            $extension = $file->extension();
            $mime_type = $file->getMimeType();
            $size = $file->getSize();

            return new FileInfo($name, $extension, $mime_type, $size);
        }

        return null;
    }
}

class FileInfo
{
    public $name;
    public $extension;
    public $mime_type;
    public $size;

    public function __construct( $name, $extension, string $mime_type, string $size)
    {
        $this->name = $name;
        $this->extension = $extension;
        $this->mime_type = $mime_type;
        $this->size = $size;
    }
}
