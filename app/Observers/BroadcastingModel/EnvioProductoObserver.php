<?php

namespace App\Observers\BroadcastingModel;

use App\Models\EnvioProducto;

class EnvioProductoObserver
{
    /**
     * Handle the EnvioProducto "created" event.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return void
     */
    public function created(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Handle the EnvioProducto "updated" event.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return void
     */
    public function updated(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Handle the EnvioProducto "deleted" event.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return void
     */
    public function deleted(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Handle the EnvioProducto "restored" event.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return void
     */
    public function restored(EnvioProducto $envioProducto)
    {
        //
    }

    /**
     * Handle the EnvioProducto "force deleted" event.
     *
     * @param  \App\Models\EnvioProducto  $envioProducto
     * @return void
     */
    public function forceDeleted(EnvioProducto $envioProducto)
    {
        //
    }
}
