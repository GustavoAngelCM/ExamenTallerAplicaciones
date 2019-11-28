<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historial_entregas')->insert([
          [
            'proveedor_id' => 1,
            'producto_id' => 5,
            'fechaEntrega' => '2019-10-27',
            'precioTotal' => 12*1.50,
            'fechaVencimiento' => '2019-12-12',
            'precioUnitario' => 1.50,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 2,
            'producto_id' => 2,
            'fechaEntrega' => '2019-10-27',
            'precioTotal' => 12*11.00,
            'fechaVencimiento' => '2019-12-12',
            'precioUnitario' => 11.00,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 3,
            'producto_id' => 1,
            'fechaEntrega' => '2019-10-28',
            'precioTotal' => 12*3,
            'fechaVencimiento' => '2020-08-12',
            'precioUnitario' => 3,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 4,
            'producto_id' => 4,
            'fechaEntrega' => '2019-10-15',
            'precioTotal' => 12*7.50,
            'fechaVencimiento' => '2020-01-12',
            'precioUnitario' => 7.50,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 5,
            'producto_id' => 6,
            'fechaEntrega' => '2019-09-27',
            'precioTotal' => 12*13,
            'fechaVencimiento' => '2020-01-12',
            'precioUnitario' => 13.00,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 6,
            'producto_id' => 7,
            'fechaEntrega' => '2019-08-27',
            'precioTotal' => 12*8,
            'fechaVencimiento' => '2020-12-12',
            'precioUnitario' => 8,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 7,
            'producto_id' => 8,
            'fechaEntrega' => '2019-10-28',
            'precioTotal' => 12*22,
            'fechaVencimiento' => '2019-12-12',
            'precioUnitario' => 22,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 8,
            'producto_id' => 9,
            'fechaEntrega' => '2019-10-27',
            'precioTotal' => 12*7,
            'fechaVencimiento' => '2019-12-05',
            'precioUnitario' => 7,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 9,
            'producto_id' => 10,
            'fechaEntrega' => '2019-10-28',
            'precioTotal' => 12*38,
            'fechaVencimiento' => '2019-12-12',
            'precioUnitario' => 38,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 10,
            'producto_id' => 3,
            'fechaEntrega' => '2019-10-27',
            'precioTotal' => 12*1,
            'fechaVencimiento' => '2019-12-12',
            'precioUnitario' => 1,
            'cantidad' => 12
          ],
          [
            'proveedor_id' => 9,
            'producto_id' => 4,
            'fechaEntrega' => '2019-10-30',
            'precioTotal' => 6*7.50,
            'fechaVencimiento' => '2020-02-12',
            'precioUnitario' => 7.50,
            'cantidad' => 6
          ],
        ]);
    }
}
