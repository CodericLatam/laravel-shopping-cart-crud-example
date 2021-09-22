<?php

namespace App\Observers\BroadcastingModel;

use App\Events\DireccionEvent;
use App\Models\Direccion;

class DireccionObserver
{
    /**
     * Handle the Direccion "created" event.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return void
     */
    public function created(Direccion $direccion)
    {
        event(new DireccionEvent($direccion, 'created'));
    }

    /**
     * Handle the Direccion "updated" event.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return void
     */
    public function updated(Direccion $direccion)
    {
        event(new DireccionEvent($direccion, 'updated'));
    }

    /**
     * Handle the Direccion "deleted" event.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return void
     */
    public function deleted(Direccion $direccion)
    {
        event(new DireccionEvent($direccion, 'deleted'));
    }

    /**
     * Handle the Direccion "restored" event.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return void
     */
    public function restored(Direccion $direccion)
    {
        event(new DireccionEvent($direccion, 'restored'));
    }

    /**
     * Handle the Direccion "force deleted" event.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return void
     */
    public function forceDeleted(Direccion $direccion)
    {
        event(new DireccionEvent($direccion, 'forceDeleted'));
    }
}
