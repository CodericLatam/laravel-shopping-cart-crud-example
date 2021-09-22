<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Models\Contacto;
use App\Models\Direccion;
use App\Models\Item;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use App\Observers\BroadcastingModel\ContactoObserver;
use App\Observers\BroadcastingModel\DireccionObserver;
use App\Observers\BroadcastingModel\ItemObserver;
use App\Observers\BroadcastingModel\PedidoObserver;
use App\Observers\BroadcastingModel\ProductoObserver;
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
        /*
        Contacto::observe(new ContactoObserver);
        Direccion::observe(new DireccionObserver);
        Item::observe(new ItemObserver);
        Pedido::observe(new PedidoObserver);
        Producto::observe(new ProductoObserver);
        User::observe(new UserObserver);
        */
    }
}
