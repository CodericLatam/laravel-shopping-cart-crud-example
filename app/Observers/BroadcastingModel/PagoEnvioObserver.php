<?php

namespace App\Observers\BroadcastingModel;

use App\Models\PagoEnvio;

class PagoEnvioObserver
{
    /**
     * Handle the PagoEnvio "created" event.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return void
     */
    public function created(PagoEnvio $pagoEnvio)
    {
        //
    }

    /**
     * Handle the PagoEnvio "updated" event.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return void
     */
    public function updated(PagoEnvio $pagoEnvio)
    {
        //
    }

    /**
     * Handle the PagoEnvio "deleted" event.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return void
     */
    public function deleted(PagoEnvio $pagoEnvio)
    {
        //
    }

    /**
     * Handle the PagoEnvio "restored" event.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return void
     */
    public function restored(PagoEnvio $pagoEnvio)
    {
        //
    }

    /**
     * Handle the PagoEnvio "force deleted" event.
     *
     * @param  \App\Models\PagoEnvio  $pagoEnvio
     * @return void
     */
    public function forceDeleted(PagoEnvio $pagoEnvio)
    {
        //
    }
}
