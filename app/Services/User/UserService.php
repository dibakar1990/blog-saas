<?php

namespace App\Services\User;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private UserRepositoryInterface $userRepository
    ){ }

    public function getAuthUser()
    {
        return $this->userRepository->getAuthUser();
    }

    public function getAllUser()
    {
        return $this->userRepository->getAll();
    }

    public function updateProfileByID($request, string $id)
    {
        return $this->userRepository->updateProfile($request, $id);
    }

    public function passwordChange($requestData, $id)
    {
        return $this->userRepository->changePassword($requestData, $id);
    }

    public function enterActivity($user_activity, $ip, $email)
    {
        $ip = '110.224.103.20';
        return $this->userRepository->storeActivity($user_activity, $ip, $email);
    }

    public function getActivityLog()
    {
        return $this->userRepository->activityLog();
    }

    public function getActivityLogLatestLocation()
    {
        return $this->userRepository->latestLocation();
    }
}
