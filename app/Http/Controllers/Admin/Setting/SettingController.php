<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Services\Setting\SettingService;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private SettingService $settingService
    ){ }

    public function index()
    {
        $setting = $this->settingService->getSettingData();
        return view('admin.setting.index',compact('setting'));
    }

    public function update(SettingRequest $request, string $id)
    {
        $this->settingService->updateSetting($request->all(),$id);
        $redirect = route('admin.setting.index');
        return $this->success($redirect,'Setting updated successfully');
    }

}
