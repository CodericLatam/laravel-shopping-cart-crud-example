<?php

use App\Http\Controllers\IndexController;

use App\Http\Controllers\Admin\ContactoController as ContactoAdminController;
use App\Http\Controllers\Admin\DireccionController as DireccionAdminController;
use App\Http\Controllers\Admin\EnvioProductoController as EnvioProductoAdminController;
use App\Http\Controllers\Admin\EnvioEstadoController as EnvioEstadoAdminController;
use App\Http\Controllers\Admin\EnvioController as EnvioAdminController;
use App\Http\Controllers\Admin\EnvioTipoController as EnvioTipoAdminController;
use App\Http\Controllers\Admin\EstadoController as EstadoAdminController;
use App\Http\Controllers\Admin\InventarioController as InventarioAdminController;
use App\Http\Controllers\Admin\PagoEnvioController as PagoEnvioAdminController;
use App\Http\Controllers\Admin\PagoController as PagoAdminController;
use App\Http\Controllers\Admin\PagoTipoController as PagoTipoAdminController;
use App\Http\Controllers\Admin\ProductoController as ProductoAdminController;
use App\Http\Controllers\Admin\ProductoTipoController as ProductoTipoAdminController;
use App\Http\Controllers\Admin\UserController as UserAdminController;


use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/tienda', [IndexController::class, 'tienda'])->name('tienda');
Route::get('/carrito', [IndexController::class, 'carrito'])->name('carrito');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::resources([
            'contacto' => ContactoAdminController::class,
            'direccion' => DireccionAdminController::class,
            'envio.producto' => EnvioProductoAdminController::class,
            'envio.estado' => EnvioEstadoAdminController::class,
            'envio' => EnvioAdminController::class,
            'envio.tipo' => EnvioTipoAdminController::class,
            'estado' => EstadoAdminController::class,
            'inventario' => InventarioAdminController::class,
            'pago.envio' => PagoEnvioAdminController::class,
            'pago' => PagoAdminController::class,
            'pago.tipo' => PagoTipoAdminController::class,
            'pago.envio' => PagoEnvioAdminController::class,
            'producto' => ProductoAdminController::class,
            'producto.tipo' => ProductoTipoAdminController::class,
            'user' => UserAdminController::class,
        ]);
    });
});