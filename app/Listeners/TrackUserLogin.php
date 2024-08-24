<?php

namespace App\Listeners;

class TrackUserLogin
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
     * @param object $event
     * @return void
     */
    public function handle(object $event)
    {
        $event->user->update(['last_login' => now()]);
    }
}
