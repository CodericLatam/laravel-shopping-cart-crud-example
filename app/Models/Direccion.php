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
    protected $fillable = ['user_id', 'direccion', 'localidad', 'ciudad', 'distrito', 'pais'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function broadcastOn($event)
    {
        return [$this, $this->user];
    }
}
