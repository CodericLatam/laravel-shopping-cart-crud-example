<?php

namespace App\Events;

use App\Models\Direccion;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DireccionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public Direccion $direccion;
    private String $eventType;
    
    public function __construct(Direccion $direccion, String $eventType)
    {
        $this->eventType = $eventType;
        $this->direccion = $direccion;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['direccion.'.$this->direccion->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}
