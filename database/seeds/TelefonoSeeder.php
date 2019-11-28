<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefonos')->insert([
          [
            'cliente_id' => 2,
            'numeroTelefono' => 60340214,
          ],
          [
            'cliente_id' => 2,
            'numeroTelefono' => 69599608,
          ],
          [
            'cliente_id' => 3,
            'numeroTelefono' => 72314764,
          ],
          [
            'cliente_id' => 4,
            'numeroTelefono' => 68292001,
          ],
          [
            'cliente_id' => 5,
            'numeroTelefono' => 78646263,
          ],
          [
            'cliente_id' => 6,
            'numeroTelefono' => 79599608,
          ],
          [
            'cliente_id' => 7,
            'numeroTelefono' => 69599609,
          ],
          [
            'cliente_id' => 8,
            'numeroTelefono' => 69599699,
          ],
          [
            'cliente_id' => 9,
            'numeroTelefono' => 69559608,
          ],
          [
            'cliente_id' => 10,
            'numeroTelefono' => 69599908,
          ],
        ]);
    }
}
