<?php

namespace App\Services\Setting;

use App\Interfaces\SettingRepositoryInterface;

class SettingService
{
    
    public function __construct(
        private SettingRepositoryInterface $settingRepository
    ){ }

    public function getSettingData()
    {
        return $this->settingRepository->getSetting();
    }

    public function updateSetting($request,string $id)
    {
        return $this->settingRepository->update($request,$id);
    }
}
