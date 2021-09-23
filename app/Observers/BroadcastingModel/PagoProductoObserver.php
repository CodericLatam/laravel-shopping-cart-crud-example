<?php

namespace App\Observers\BroadcastingModel;

use App\Models\PagoProducto;

class PagoProductoObserver
{
    /**
     * Handle the PagoProducto "created" event.
     *
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return void
     */
    public function created(PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Handle the PagoProducto "updated" event.
     *
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return void
     */
    public function updated(PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Handle the PagoProducto "deleted" event.
     *
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return void
     */
    public function deleted(PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Handle the PagoProducto "restored" event.
     *
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return void
     */
    public function restored(PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Handle the PagoProducto "force deleted" event.
     *
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return void
     */
    public function forceDeleted(PagoProducto $pagoProducto)
    {
        //
    }
}
