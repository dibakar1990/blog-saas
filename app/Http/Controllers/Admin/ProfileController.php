<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpadateProfileRequest;
use App\Services\User\UserService;
use App\Trait\ResponseTrait;

class ProfileController extends Controller
{
    use ResponseTrait;

    public function __construct(
        private UserService $userService
    ){ }

    public function index()
    {
        $user = $this->userService->getAuthUser();
        $activites = $this->userService->getActivityLog();
        $location = $this->userService->getActivityLogLatestLocation();
        $user['location'] = $location->location ? $location->location : null;
        return view('admin.profile.index',compact(
            'user',
            'activites'
        ));
    }

    public function update(UpadateProfileRequest $request, string $id)
    {
        $user = $this->userService->updateProfileByID($request->all(),$id);
        
        $redirect = route('admin.account.setting');
        return $this->success($redirect, 'Profile updated successfully');
    }

    public function setting()
    {
        $user = $this->userService->getAuthUser();
        return view('admin.profile.account-setting',compact(
            'user'
        ));
    }

    public function change_password()
    {
        $user = $this->userService->getAuthUser();
        $activites = $this->userService->getActivityLog();
        
        return view('admin.profile.change-password',compact(
            'user',
            'activites'
        ));
    }

    public function update_password(ChangePasswordRequest $request, $id)
    {
        $user = $this->userService->passwordChange($request->all(), $id);
        $redirect = route('admin.change.password');
        return $this->success($redirect, 'Profile password updated successfully');
    }
}
