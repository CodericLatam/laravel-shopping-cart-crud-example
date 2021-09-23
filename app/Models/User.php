<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use BroadcastsEvents;

    protected $fillable = [
        'name',
        'email',
        'vat',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contactos()
    {
        return $this->belongsToMany(Contacto::class);
    }

    public function direccions()
    {
        return $this->belongsToMany(Direccion::class);
    }
    public function envios()
    {
        return $this->belongsToMany(Envio::class);
    }

    public function broadcastOn($event)
    {       
       return [$this];
    }
}
