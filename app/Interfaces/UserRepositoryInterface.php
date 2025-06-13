<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAuthUser();
    public function getAll();
    public function updateProfile(array $request, string $id);
    public function changePassword($data, $id);
    public function storeActivity($user_activity, $id, $email);
    public function activityLog();
    public function latestLocation();
}
