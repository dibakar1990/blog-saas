<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
         ]);

         Artisan::call('cache:clear');

         $this->userInfo();
    }

    private function userInfo()
    {
        // info for root user in command line
        $this->command->line('');
        $this->command->info('Admin user created:');
        $this->command->warn('- Email: super-admin@gmail.com');
        $this->command->warn('- Password: 123456');
        $this->command->info('');
    }
}
