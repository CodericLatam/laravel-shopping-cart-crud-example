<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Producto extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;
    
    protected $_guards = [];
    protected $fillable = [
        'producto_tipo_id',
        'nombre',
        'foto',
        'descripcion',
        'unidad',
        'precio',
    ];
    
    public function inventarios()
    {
        return $this->belongsToMany(Inventario::class);
    }

    public function producto_tipo()
    {
        return $this->belongsTo(ProductoTipo::class);
    }

    
    public function broadcastOn($event)
    {
        return [$this, $this->user];
    }
}
