<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::insert('INSERT INTO `producto_tipos` (`descripcion`) VALUES (?);', ['Ropa']);
        DB::insert('INSERT INTO `producto_tipos` (`descripcion`) VALUES (?);', ['Calzado']);
        DB::insert('INSERT INTO `producto_tipos` (`descripcion`) VALUES (?);', ['Electrodomésticos']);
        DB::insert('INSERT INTO `producto_tipos` (`descripcion`) VALUES (?);', ['Celulares']);
        DB::insert('INSERT INTO `producto_tipos` (`descripcion`) VALUES (?);', ['Computadoras']);
    }
}
