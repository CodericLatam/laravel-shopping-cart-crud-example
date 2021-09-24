<?php

use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\DireccionController;
use App\Http\Controllers\Api\EnvioProductoController;
use App\Http\Controllers\Api\EnvioEstadoController;
use App\Http\Controllers\Api\EnvioController;
use App\Http\Controllers\Api\EnvioTipoController;
use App\Http\Controllers\Api\EstadoController;
use App\Http\Controllers\Api\InventarioController;
use App\Http\Controllers\Api\PagoEnvioController;
use App\Http\Controllers\Api\PagoController;
use App\Http\Controllers\Api\PagoTipoController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\ProductoTipoController;
use App\Http\Controllers\Api\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->json(['message' => 'Not Found!'], 404);
});
//Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'contacto' => ContactoController::class,
        'direccion' => DireccionController::class,
        'envio' => EnvioController::class,
        'estado' => EstadoController::class,
        'inventario' => InventarioController::class,
        'pago' => PagoController::class,
        'producto' => ProductoController::class,
        'user' => UserController::class,
        /*
         * TODO
        'envio.producto' => EnvioProductoController::class,
        'envio.estado' => EnvioEstadoController::class,
        'envio.tipo' => EnvioTipoController::class,
        'pago.envio' => PagoEnvioController::class,
        'pago.tipo' => PagoTipoController::class,
        'pago.envio' => PagoEnvioController::class,
        'producto.tipo' => ProductoTipoController::class,
         * 
         */
    ]);
//});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
