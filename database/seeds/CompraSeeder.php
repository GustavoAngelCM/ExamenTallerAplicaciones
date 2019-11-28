<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert([
          [
            'cliente_id' => 1,
            'venta_id' => 1,
            'factura' => '00001',
          ],
          [
            'cliente_id' => 2,
            'venta_id' => 2,
            'factura' => '00002',
          ],
          [
            'cliente_id' => 3,
            'venta_id' => 3,
            'factura' => '00003',
          ],
          [
            'cliente_id' => 4,
            'venta_id' => 4,
            'factura' => '00004',
          ],
          [
            'cliente_id' => 5,
            'venta_id' => 5,
            'factura' => '00005',
          ],
          [
            'cliente_id' => 6,
            'venta_id' => 6,
            'factura' => '00006',
          ],
          [
            'cliente_id' => 7,
            'venta_id' => 7,
            'factura' => '00007',
          ],
          [
            'cliente_id' => 8,
            'venta_id' => 8,
            'factura' => '00008',
          ],
          [
            'cliente_id' => 9,
            'venta_id' => 9,
            'factura' => '00009',
          ],
          [
            'cliente_id' => 10,
            'venta_id' => 10,
            'factura' => '00010',
          ],
          [
            'cliente_id' => 2,
            'venta_id' => 11,
            'factura' => '00011',
          ],
        ]);
    }
}
