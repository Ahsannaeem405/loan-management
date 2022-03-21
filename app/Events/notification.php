<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class notification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $notification;
    public $to;
    public $by;
    public $url;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($notification,$to,$by,$url)
    {
       $this->notification=$notification;
       $this->to=$to;
       $this->by=$by;
       $this->url=$url;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
