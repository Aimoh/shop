<?php

namespace App\Listeners;

use App\Events\NewUser;
use App\Notifications\NewUserNotification;

class SendEmailNewUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUser $event): void
    {
        $event->user->notify(new NewUserNotification());
    }
}
