<?php

namespace App\Events;

use App\Models\Pedido;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PedidoEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Pedido $pedido;
    private String $eventType;
    
    public function __construct(Pedido $pedido, String $eventType)
    {
        $this->eventType = $eventType;
        $this->pedido = $pedido;
    }

    public function broadcastOn()
    {
        return ['pedido.'.$this->pedido->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}
