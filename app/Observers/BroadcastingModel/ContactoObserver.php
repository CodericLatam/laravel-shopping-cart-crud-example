<?php

namespace App\Observers\BroadcastingModel;

use App\Events\ContactoEvent;
use App\Models\Contacto;

class ContactoObserver
{
    /**
     * Handle the Contacto "created" event.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return void
     */
    public function created(Contacto $contacto)
    {
        event(new ContactoEvent($contacto, 'created'));
    }

    /**
     * Handle the Contacto "updated" event.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return void
     */
    public function updated(Contacto $contacto)
    {
        event(new ContactoEvent($contacto, 'updated'));
    }

    /**
     * Handle the Contacto "deleted" event.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return void
     */
    public function deleted(Contacto $contacto)
    {
        event(new ContactoEvent($contacto, 'deleted'));
    }

    /**
     * Handle the Contacto "restored" event.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return void
     */
    public function restored(Contacto $contacto)
    {
        event(new ContactoEvent($contacto, 'restored'));
    }

    /**
     * Handle the Contacto "force deleted" event.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return void
     */
    public function forceDeleted(Contacto $contacto)
    {
        event(new ContactoEvent($contacto, 'forceDeleted'));
    }
}
