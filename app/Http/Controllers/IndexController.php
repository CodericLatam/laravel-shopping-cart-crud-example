<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function tienda()
    {
        return view('welcome');
    }
    public function carrito()
    {
        return view('welcome');
    }
}
