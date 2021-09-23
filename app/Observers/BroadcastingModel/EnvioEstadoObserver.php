<?php

namespace App\Observers\BroadcastingModel;

use App\Models\EnvioEstado;

class EnvioEstadoObserver
{
    /**
     * Handle the EnvioEstado "created" event.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return void
     */
    public function created(EnvioEstado $envioEstado)
    {
        //
    }

    /**
     * Handle the EnvioEstado "updated" event.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return void
     */
    public function updated(EnvioEstado $envioEstado)
    {
        //
    }

    /**
     * Handle the EnvioEstado "deleted" event.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return void
     */
    public function deleted(EnvioEstado $envioEstado)
    {
        //
    }

    /**
     * Handle the EnvioEstado "restored" event.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return void
     */
    public function restored(EnvioEstado $envioEstado)
    {
        //
    }

    /**
     * Handle the EnvioEstado "force deleted" event.
     *
     * @param  \App\Models\EnvioEstado  $envioEstado
     * @return void
     */
    public function forceDeleted(EnvioEstado $envioEstado)
    {
        //
    }
}
