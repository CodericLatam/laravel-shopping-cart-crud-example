<?php

namespace App\Observers\BroadcastingModel;

use App\Models\ProductoTipo;

class ProductoTipoObserver
{
    /**
     * Handle the ProductoTipo "created" event.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return void
     */
    public function created(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Handle the ProductoTipo "updated" event.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return void
     */
    public function updated(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Handle the ProductoTipo "deleted" event.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return void
     */
    public function deleted(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Handle the ProductoTipo "restored" event.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return void
     */
    public function restored(ProductoTipo $productoTipo)
    {
        //
    }

    /**
     * Handle the ProductoTipo "force deleted" event.
     *
     * @param  \App\Models\ProductoTipo  $productoTipo
     * @return void
     */
    public function forceDeleted(ProductoTipo $productoTipo)
    {
        //
    }
}
