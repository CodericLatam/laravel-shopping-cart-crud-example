<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EnvioEstado extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'envio_id',
        'estado_id',
        'descripcion',
    ];

    public function envio(){
        return $this->belongsTo(Envio::class);
    }
    
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->envio, $this->estado];
    }
}
