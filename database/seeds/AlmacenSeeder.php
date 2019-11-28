<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacens')->insert([
          [
            'producto_id' => 1,
            'cantidad' => 10
          ],
          [
            'producto_id' => 2,
            'cantidad' => 10
          ],
          [
            'producto_id' => 3,
            'cantidad' => 10
          ],
          [
            'producto_id' => 4,
            'cantidad' => 16
          ],
          [
            'producto_id' => 5,
            'cantidad' => 10
          ],
          [
            'producto_id' => 6,
            'cantidad' => 10
          ],
          [
            'producto_id' => 7,
            'cantidad' => 10
          ],
          [
            'producto_id' => 8,
            'cantidad' => 8
          ],
          [
            'producto_id' => 9,
            'cantidad' => 10
          ],
          [
            'producto_id' => 10,
            'cantidad' => 10
          ],
        ]);
    }
}
