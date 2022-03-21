<?php

namespace App\Listeners;

use App\Events\notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class notificationLisner
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
     * @param  object  $event
     * @return void
     */
    public function handle(notification $notification)
    {
$not=new \App\Models\notification();
$not->notification=$notification->notification;
$not->to=$notification->to;
$not->by=$notification->by;
$not->url=$notification->url;
        $not->save();


    }
}
