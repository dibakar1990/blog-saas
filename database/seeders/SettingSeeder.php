<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            'app_name' => 'Blog Saas',
            'location' => '123 Terry Lane, New York, USA',
            'email' => 'contact@domain.com',
            'phone' => '1234567890',
            'file_path' => null,
            'fav_icon' => null,
        ];
        Setting::factory()->create($setting);
    }
}
