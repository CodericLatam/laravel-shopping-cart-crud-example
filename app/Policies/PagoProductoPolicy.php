<?php

namespace App\Policies;

use App\Models\PagoProducto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagoProductoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PagoProducto $pagoProducto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PagoProducto  $pagoProducto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PagoProducto $pagoProducto)
    {
        //
    }
}
