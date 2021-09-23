<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PagoTipo extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    
    protected $_guards = [];
    protected $fillable = [
        'descripcion',
    ];

    public function envios()
    {
        return $this->belongsToMany(Envio::class);
    }

    public function broadcastOn($event)
    {
        return [$this, $this->envio];
    }
}
