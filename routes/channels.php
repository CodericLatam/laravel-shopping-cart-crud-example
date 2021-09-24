<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
/*
Broadcast::channel('App.Models.Contacto.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Direccion.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Envio.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Estado.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Inventario.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Pago.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.Producto.{id}', function ($user, $id) {
    return true;
});
/*
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return true;
});


Broadcast::channel('App.Models.EnvioProducto.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.EnvioEstado.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.EnvioTipo.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.PagoEnvio.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.PagoTipo.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.PagoEnvio.{id}', function ($user, $id) {
    return true;
});

Broadcast::channel('App.Models.ProductoTipo.{id}', function ($user, $id) {
    return true;
});
*/