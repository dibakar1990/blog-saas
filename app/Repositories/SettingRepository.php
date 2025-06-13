<?php

namespace App\Repositories;

use App\Interfaces\SettingRepositoryInterface;
use App\Models\Setting;
use App\Services\FileUpload\FileUploadService;
use Illuminate\Support\Facades\Storage;

class SettingRepository implements SettingRepositoryInterface
{
    
    public function __construct(
        private Setting $model,
        private FileUploadService $fileUpload
    ){ }

    public function getSetting()
    {
        $setting = $this->model::first();
        return $setting;
    }

    public function update($data, string $id):bool
    {
        $setting = $this->model::findOrFail($id);
        if (!empty($data['file'])) {
            if($setting->file_path !='') {
                if(Storage::exists($setting->file_path)){
                    Storage::delete($setting->file_path);
                }
            }
            $uploaded_file = $data['file'];
            $file_path = $this->fileUpload->store($uploaded_file, '/setting');
            
        }else{
            $file_path = $setting->file_path;
        }
        if (!empty($data['fav_icon'])) {
            if($setting->fav_icon !='') {
                if(Storage::exists($setting->fav_icon)){
                    Storage::delete($setting->fav_icon);
                }
            }
            $uploaded_file = $data['fav_icon'];
            $file_path_fav = $this->fileUpload->store($uploaded_file, '/setting');
            
        }else{
            $file_path_fav = $setting->fav_icon;
        }
        $setting->app_name = $data['app_name'];
        $setting->email = $data['email'];
        $setting->phone = $data['phone'];
        $setting->location = $data['location'];
        $setting->file_path = $file_path;
        $setting->fav_icon = $file_path_fav;
        $setting->save();
        return true;
    }
}
