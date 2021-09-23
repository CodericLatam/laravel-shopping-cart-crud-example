<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EnvioProducto extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'producto_id',
        'envio_id',
        'cantidad',
        'precio',
        'subtotal',
    ];
    
    public function envio(){
        return $this->belongsTo(Envio::class);
    }
    
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->envio, $this->producto];
    }
}
