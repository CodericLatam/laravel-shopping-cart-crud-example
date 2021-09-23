<?php

namespace App\Observers\BroadcastingModel;

use App\Models\Envio;

class EnvioObserver
{
    /**
     * Handle the Envio "created" event.
     *
     * @param  \App\Models\Envio  $envio
     * @return void
     */
    public function created(Envio $envio)
    {
        //
    }

    /**
     * Handle the Envio "updated" event.
     *
     * @param  \App\Models\Envio  $envio
     * @return void
     */
    public function updated(Envio $envio)
    {
        //
    }

    /**
     * Handle the Envio "deleted" event.
     *
     * @param  \App\Models\Envio  $envio
     * @return void
     */
    public function deleted(Envio $envio)
    {
        //
    }

    /**
     * Handle the Envio "restored" event.
     *
     * @param  \App\Models\Envio  $envio
     * @return void
     */
    public function restored(Envio $envio)
    {
        //
    }

    /**
     * Handle the Envio "force deleted" event.
     *
     * @param  \App\Models\Envio  $envio
     * @return void
     */
    public function forceDeleted(Envio $envio)
    {
        //
    }
}
