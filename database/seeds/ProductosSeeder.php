<?php

use Illuminate\Database\Seeder;
use Illiminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
          [
            'nombreProducto' => 'Sublime',
            'precio' => 3.00,
            'idCategoria' => 1,
            'fechaVencimiento' => '2020-08-12'
          ],
          [
            'nombreProducto' => 'Pan molde',
            'precio' => 11.00,
            'idCategoria' => 2,
            'fechaVencimiento' => '2019-12-12'
          ],
        ]);
    }
}
