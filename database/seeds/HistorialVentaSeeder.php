<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historial_ventas')->insert([
          [
            'producto_id' => 1,
            'venta_id' => 1,
            'cantidad' => 2,
            'subTotal' => 6,
          ],
          [
            'producto_id' => 2,
            'venta_id' => 2,
            'cantidad' => 2,
            'subTotal' => 22,
          ],
          [
            'producto_id' => 3,
            'venta_id' => 3,
            'cantidad' => 2,
            'subTotal' => 2,
          ],
          [
            'producto_id' => 4,
            'venta_id' => 4,
            'cantidad' => 2,
            'subTotal' => 15,
          ],
          [
            'producto_id' => 5,
            'venta_id' => 5,
            'cantidad' => 2,
            'subTotal' => 3,
          ],
          [
            'producto_id' => 6,
            'venta_id' => 6,
            'cantidad' => 2,
            'subTotal' => 26,
          ],
          [
            'producto_id' => 7,
            'venta_id' => 7,
            'cantidad' => 2,
            'subTotal' => 16,
          ],
          [
            'producto_id' => 8,
            'venta_id' => 8,
            'cantidad' => 2,
            'subTotal' => 44,
          ],
          [
            'producto_id' => 9,
            'venta_id' => 9,
            'cantidad' => 2,
            'subTotal' => 14,
          ],
          [
            'producto_id' => 10,
            'venta_id' => 10,
            'cantidad' => 2,
            'subTotal' => 76,
          ],
          [
            'producto_id' => 8,
            'venta_id' => 11,
            'cantidad' => 2,
            'subTotal' => 44,
          ],
        ]);
    }
}
