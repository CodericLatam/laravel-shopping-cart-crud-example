<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Envio extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    
    protected $_guards = [];
    protected $fillable = [
        'user_id',
        'envio_tipo_id',
        'pago_tipo_id',
        'envio_direccion',
        'pago_direccion',
        'precio',
        'costo_envio',
        'descuento',
        'total',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function envio_producto_s()
    {
        return $this->belongsToMany(EnvioProducto::class);
    }

    public function envio_estado_s()
    {
        return $this->belongsToMany(EnvioEstado::class);
    }

    public function envio_tipo_s()
    {
        return $this->belongsToMany(EnvioTipo::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->user];
    }
}
