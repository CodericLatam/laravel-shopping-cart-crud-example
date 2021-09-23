<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Inventario extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    
    protected $_guards = [];
    protected $fillable = [
        'producto_id',
        'inventario',
        'costo',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function broadcastOn($event)
    {       
       return [$this, $this->producto];
    }
}
