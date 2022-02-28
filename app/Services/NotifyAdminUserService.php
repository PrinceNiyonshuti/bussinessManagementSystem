<?php

namespace App\Services;

use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyAdmin;
use App\Models\User;

class NotifyAdminUserService
{

    public function notifyAdminUser($notification)
    {

        // finding all the admins
        $admin = User::where('name', 'prince')->get();

        //business logic here
        Notification::send($admin, new NotifyAdmin($notification));
    }
}
