<?php

namespace App\Events;

use App\Models\Item;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ItemEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Item $item;

    private String $eventType;
    
    public function __construct(Item $item, String $eventType)
    {
        $this->eventType = $eventType;
        $this->item = $item;
    }

    public function broadcastOn()
    {
        return ['item.'.$this->item->id];
    }

    public function broadcastAs()
    {
        return $this->eventType;
    }
}
