<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\ActivityLog;
use App\Models\User;
use App\Services\FileUpload\FileUploadService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private User $model,
        private ActivityLog $activityLogModel,
        private FileUploadService $fileUpload,
    ){ }

    public function getAuthUser()
    {
        $user = Auth::user();
        return $user;
    }

    public function getAll()
    {
        $users = $this->model::where('status',1)->latest()->get();
    }

    public function updateProfile($data, string $id)
    {
        $user = $this->model::findOrFail($id);
        if (!empty($data['file'])) {
            if($user->file_path !='') {
                if(Storage::exists($user->file_path)){
                    Storage::delete($user->file_path);
                }
            }
            $uploaded_file = $data['file'];
            $file_path = $this->fileUpload->store($uploaded_file, '/avatar');
            
        }else{
            $file_path = $user->file_path;
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->username = $data['userName'];
        $user->file_path = $file_path;
        $user->save();

        return $user;
    }

    public function changePassword($data, $id)
    {
        $user = User::findOrFail($id);
        $user->password = Hash::make($data['newPassword']);
        $user->save();
        return $user;
    }

    public function storeActivity($user_activity, $ip, $email)
    {
        
        $currentUserInfo = Location::get($ip);
        if(!empty($currentUserInfo)){
            $location = $currentUserInfo->countryName.','.$currentUserInfo->regionName.','.$currentUserInfo->cityName.','.$currentUserInfo->zipCode;
        }
      
        $agent = new Agent();
        $platform = $agent->platform();
        // Ubuntu, Windows, OS X, ...
        $browser = $agent->browser();
        $version = $agent->version($browser);
        // Chrome, IE, Safari, Firefox, ...
        $activityLog = new $this->activityLogModel();
        $activityLog->platform = $agent->platform();
        $activityLog->browser = $agent->browser().' '.'(Browser version '.$version.')';
        $activityLog->device = $agent->device();
        $activityLog->ip_address = $ip;
        $activityLog->location = $location;
        $activityLog->user_id = Auth::user()->id ?? null;
        $activityLog->user_activity = $user_activity;
        $activityLog->user_email = $email;
        $activityLog->save();
    }

    public function activityLog()
    {
        if(Auth::user()->role == 'super-admin'){
            $activityLog = $this->activityLogModel::with('user')->latest()->limit(4)->get();
        }else{
            $activityLog = $this->activityLogModel::with('user')->where('user_id',Auth::user()->id)->latest()->limit(4)->get();
        }
       
        return $activityLog;
    }

    public function latestLocation()
    {
        $activityLog = $this->activityLogModel::where('user_id',Auth::user()->id)->latest()->first();
        return $activityLog;
    }
}
