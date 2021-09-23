<?php

namespace App\Observers\BroadcastingModel;

use App\Models\EnvioTipo;

class EnvioTipoObserver
{
    /**
     * Handle the EnvioTipo "created" event.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return void
     */
    public function created(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Handle the EnvioTipo "updated" event.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return void
     */
    public function updated(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Handle the EnvioTipo "deleted" event.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return void
     */
    public function deleted(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Handle the EnvioTipo "restored" event.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return void
     */
    public function restored(EnvioTipo $envioTipo)
    {
        //
    }

    /**
     * Handle the EnvioTipo "force deleted" event.
     *
     * @param  \App\Models\EnvioTipo  $envioTipo
     * @return void
     */
    public function forceDeleted(EnvioTipo $envioTipo)
    {
        //
    }
}
