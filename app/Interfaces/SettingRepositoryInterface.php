<?php

namespace App\Interfaces;

interface SettingRepositoryInterface
{
    public function getSetting();
    public function update($data, string $id);
}
