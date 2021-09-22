<?php

namespace App\Events;

use App\Models\Contacto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactoEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Contacto $contacto;
    private String $eventType;

    public function __construct(Contacto $contacto, string $eventType)
    {
        $this->eventType = $eventType;
        $this->contacto = $contacto;
    }
    
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['contacto.'.$this->contacto->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}