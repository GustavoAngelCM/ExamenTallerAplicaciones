<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'categoria_id' => 1,
            'fechaVencimiento' => '2020-08-12'
          ],
          [
            'nombreProducto' => 'Pan molde',
            'precio' => 11.00,
            'categoria_id' => 2,
            'fechaVencimiento' => '2019-12-12'
          ],
          [
            'nombreProducto' => 'Bon bon bum',
            'precio' => 1.00,
            'categoria_id' => 3,
            'fechaVencimiento' => '2020-12-12'
          ],
          [
            'nombreProducto' => 'Salchicha',
            'precio' => 7.50,
            'categoria_id' => 4,
            'fechaVencimiento' => '2020-01-12'
          ],
          [
            'nombreProducto' => 'ChiquiChock',
            'precio' => 1.50,
            'categoria_id' => 5,
            'fechaVencimiento' => '2019-12-12'
          ],
          [
            'nombreProducto' => 'Fanta guarana 3 lts',
            'precio' => 13.00,
            'categoria_id' => 6,
            'fechaVencimiento' => '2020-01-12'
          ],
          [
            'nombreProducto' => 'Arroz grano de oro',
            'precio' => 8.00,
            'categoria_id' => 7,
            'fechaVencimiento' => '2020-12-12'
          ],
          [
            'nombreProducto' => 'Uva',
            'precio' => 22.00,
            'categoria_id' => 8,
            'fechaVencimiento' => '2019-12-12'
          ],
          [
            'nombreProducto' => 'Zanahoria',
            'precio' => 7.00,
            'categoria_id' => 9,
            'fechaVencimiento' => '2019-12-05'
          ],
          [
            'nombreProducto' => 'Pollo',
            'precio' => 38.00,
            'categoria_id' => 10,
            'fechaVencimiento' => '2019-12-12'
          ],
        ]);
    }
}
