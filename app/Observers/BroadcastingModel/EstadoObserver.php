<?php

namespace App\Observers\BroadcastingModel;

use App\Models\Estado;

class EstadoObserver
{
    /**
     * Handle the Estado "created" event.
     *
     * @param  \App\Models\Estado  $estado
     * @return void
     */
    public function created(Estado $estado)
    {
        //
    }

    /**
     * Handle the Estado "updated" event.
     *
     * @param  \App\Models\Estado  $estado
     * @return void
     */
    public function updated(Estado $estado)
    {
        //
    }

    /**
     * Handle the Estado "deleted" event.
     *
     * @param  \App\Models\Estado  $estado
     * @return void
     */
    public function deleted(Estado $estado)
    {
        //
    }

    /**
     * Handle the Estado "restored" event.
     *
     * @param  \App\Models\Estado  $estado
     * @return void
     */
    public function restored(Estado $estado)
    {
        //
    }

    /**
     * Handle the Estado "force deleted" event.
     *
     * @param  \App\Models\Estado  $estado
     * @return void
     */
    public function forceDeleted(Estado $estado)
    {
        //
    }
}
