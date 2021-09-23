<?php

namespace App\Observers\BroadcastingModel;

use App\Models\PagoTipo;

class PagoTipoObserver
{
    /**
     * Handle the PagoTipo "created" event.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return void
     */
    public function created(PagoTipo $pagoTipo)
    {
        //
    }

    /**
     * Handle the PagoTipo "updated" event.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return void
     */
    public function updated(PagoTipo $pagoTipo)
    {
        //
    }

    /**
     * Handle the PagoTipo "deleted" event.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return void
     */
    public function deleted(PagoTipo $pagoTipo)
    {
        //
    }

    /**
     * Handle the PagoTipo "restored" event.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return void
     */
    public function restored(PagoTipo $pagoTipo)
    {
        //
    }

    /**
     * Handle the PagoTipo "force deleted" event.
     *
     * @param  \App\Models\PagoTipo  $pagoTipo
     * @return void
     */
    public function forceDeleted(PagoTipo $pagoTipo)
    {
        //
    }
}
