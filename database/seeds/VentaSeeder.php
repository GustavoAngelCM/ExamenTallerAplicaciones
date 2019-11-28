<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
          [
            'fechaVenta' => '2019-11-10',
            'montoFinal' => 6,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-10',
            'montoFinal' => 22,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-10',
            'montoFinal' => 2,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-10',
            'montoFinal' => 15,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-10',
            'montoFinal' => 3,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-11',
            'montoFinal' => 26,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-11',
            'montoFinal' => 16,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-11',
            'montoFinal' => 44,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-11',
            'montoFinal' => 14,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-11',
            'montoFinal' => 76,
            'descuento' => 0
          ],
          [
            'fechaVenta' => '2019-11-12',
            'montoFinal' => 44,
            'descuento' => 0
          ],
        ]);
    }
}
