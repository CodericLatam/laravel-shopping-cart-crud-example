<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function tienda()
    {
        $productos = Producto::all();
        return view('tienda', compact('productos'));
    }
    public function carrito()
    {
        return view('carrito');
    }
}
