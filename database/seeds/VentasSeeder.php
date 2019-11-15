<?php

use Illuminate\Database\Seeder;
use Illiminate\Support\Facades\DB;

class VentasSeeder extends Seeder
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
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
          [
            'fechaVenta' => new DateTime(),
            'descuento' => 0.00,
            'montoFinal' => 0.00,
          ],
        ]);
    }
}
