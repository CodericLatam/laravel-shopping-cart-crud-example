<?php

namespace App\Observers\BroadcastingModel;

use App\Models\Pedido;

class PedidoObserver
{
    /**
     * Handle the Pedido "created" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function created(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the Pedido "updated" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function updated(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the Pedido "deleted" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function deleted(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the Pedido "restored" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function restored(Pedido $pedido)
    {
        //
    }

    /**
     * Handle the Pedido "force deleted" event.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return void
     */
    public function forceDeleted(Pedido $pedido)
    {
        //
    }
}
