<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use App\Models\Contacto;
use App\Models\Direccion;
use App\Models\EnvioEstado;
use App\Models\Envio;
use App\Models\EnvioProducto;
use App\Models\EnvioTipo;
use App\Models\Estado;
use App\Models\Inventario;
use App\Models\PagoEnvio;
use App\Models\Pago;
use App\Models\PagoTipo;
use App\Models\Producto;
use App\Models\ProductoTipo;
use App\Models\User;

use App\Observers\BroadcastingModel\ContactoObserver;
use App\Observers\BroadcastingModel\DireccionObserver;
use App\Observers\BroadcastingModel\EnvioEstadoObserver;
use App\Observers\BroadcastingModel\EnvioObserver;
use App\Observers\BroadcastingModel\EnvioProductoObserver;
use App\Observers\BroadcastingModel\EnvioTipoObserver;
use App\Observers\BroadcastingModel\EstadoObserver;
use App\Observers\BroadcastingModel\InventarioObserver;
use App\Observers\BroadcastingModel\PagoEnvioObserver;
use App\Observers\BroadcastingModel\PagoObserver;
use App\Observers\BroadcastingModel\PagoTipoObserver;
use App\Observers\BroadcastingModel\ProductoObserver;
use App\Observers\BroadcastingModel\ProductoTipoObserver;
use App\Observers\BroadcastingModel\UserObserver;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Contacto::observe(new ContactoObserver);
        Direccion::observe(new DireccionObserver);
        EnvioEstado::observe(new EnvioEstadoObserver);
        Envio::observe(new EnvioObserver);
        EnvioProducto::observe(new EnvioProductoObserver);
        EnvioTipo::observe(new EnvioTipoObserver);
        Estado::observe(new EstadoObserver);
        Inventario::observe(new InventarioObserver);
        PagoEnvio::observe(new PagoEnvioObserver);
        Pago::observe(new PagoObserver);
        PagoTipo::observe(new PagoTipoObserver);
        Producto::observe(new ProductoObserver);
        ProductoTipo::observe(new ProductoTipoObserver);
        User::observe(new UserObserver);

    }
}
