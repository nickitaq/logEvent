<?php

namespace App\Listeners;

use App\Models\UserEvent;
use Illuminate\Auth\Events\Login;
use IlluminateAuthEventsLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //TODO: SAVE LOGGED IN USER_ID AND TIME STAMP
        $ue = new UserEvent();
        $ue->loginEvent($event->user->id);
        

    }
}
