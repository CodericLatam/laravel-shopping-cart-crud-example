<?php

namespace App\Observers\BroadcastingModel;

use App\Models\Pago;

class PagoObserver
{
    /**
     * Handle the Pago "created" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function created(Pago $pago)
    {
        //
    }

    /**
     * Handle the Pago "updated" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function updated(Pago $pago)
    {
        //
    }

    /**
     * Handle the Pago "deleted" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function deleted(Pago $pago)
    {
        //
    }

    /**
     * Handle the Pago "restored" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function restored(Pago $pago)
    {
        //
    }

    /**
     * Handle the Pago "force deleted" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function forceDeleted(Pago $pago)
    {
        //
    }
}
