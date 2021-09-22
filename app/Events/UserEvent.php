<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;
    private String $eventType;
    
    public function __construct(User $user, string $eventType)
    {
        $this->eventType = $eventType;
        $this->user = $user;
    }

    public function broadcastOn()
    {
        return ['user.'.$this->user->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}
