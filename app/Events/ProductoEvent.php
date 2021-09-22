<?php

namespace App\Events;

use App\Models\Producto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductoEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Producto $producto;
    private String $eventType;
    
    public function __construct(Producto $producto, String $eventType)
    {
        $this->eventType = $eventType;
        $this->producto = $producto;
    }

    public function broadcastOn()
    {
        return ['producto.'.$this->producto->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}
