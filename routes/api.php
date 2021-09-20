<?php

use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\DireccionController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProductoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Agregando autenticación
//Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'contactos' => ContactoController::class,
        'direccions' => DireccionController::class,
        'items' => ItemController::class,
        'pedidos' => PedidoController::class,
        'productos' => ProductoController::class,
    ]);
//});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
