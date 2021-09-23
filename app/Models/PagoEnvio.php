<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PagoEnvio extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'envio_id',
        'pago_id',
        'valor',
    ];
    public function envio(){
        return $this->belongsTo(Envio::class);
    }
    
    public function pago(){
        return $this->belongsTo(Pago::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->envio, $this->pago];
    }
}
