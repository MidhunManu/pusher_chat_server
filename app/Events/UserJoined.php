<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserJoined
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('new_user'),
        ];
    }

    public function broadcastAs()
    {
       return "user_joined";
    }
}
