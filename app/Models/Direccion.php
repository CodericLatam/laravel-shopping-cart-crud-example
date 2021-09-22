<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Direccion extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = ['contacto_id', 'direccion', 'localidad', 'ciudad', 'distrito', 'pais'];
    public function contacto(){
        return $this->belongsTo(Contacto::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->contacto];
    }
}
