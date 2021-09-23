<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Estado extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'descripcion',
    ];

    public function envio_estado(){
        return $this->belongsTo(EnvioEstado::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->envio_estado];
    }
}
