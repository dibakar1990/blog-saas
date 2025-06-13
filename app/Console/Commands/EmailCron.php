<?php

namespace App\Console\Commands;

use App\Mail\AllUserSendMail;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailCron extends Command
{
   

    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Emali send to the all user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = self::getUser();
        if ($users->count() > 0) {

            foreach ($users as $user) {

                Mail::to($user)->send(new AllUserSendMail($user));

            }
        }
        return 0;
    }

    public function getUser()
    {
        $users = User::where('status',1)->latest()->get();
        return $users;
    }
}
