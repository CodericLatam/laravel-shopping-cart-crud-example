<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contacto extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    protected $_guards = [];
    protected $fillable = ['nombre','telefono','email'];
    
    public function direcciones()
    {
        return $this->belongsToMany(Direccion::class);
    }

    public function broadcastOn($event)
    {
       // return [$this, $this->direcciones];
       
       return [$this];
    }
}
