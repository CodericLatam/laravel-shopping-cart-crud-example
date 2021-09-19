<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->prefix('panel')->group(function () {
    Route::resources([
        'contactos' => ContactoController::class,
        'direccions' => DireccionController::class,
        'items' => ItemController::class,
        'pedidos' => PedidoController::class,
        'productos' => ProductoController::class,
    ]);
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
