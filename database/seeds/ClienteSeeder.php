<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
          [
            'nombreRazon' => 'S/N',
            'nitCi' => '0',
            'direccion_id' => 11
          ],
          [
            'nombreRazon' => 'Cerezo',
            'nitCi' => '7417215',
            'direccion_id' => 12
          ],
          [
            'nombreRazon' => 'Mamani',
            'nitCi' => '633231014',
            'direccion_id' => 13
          ],
          [
            'nombreRazon' => 'Quispe',
            'nitCi' => '113144',
            'direccion_id' => 14
          ],
          [
            'nombreRazon' => 'Laime',
            'nitCi' => '1335531',
            'direccion_id' => 15
          ],
          [
            'nombreRazon' => 'Guarachi',
            'nitCi' => '4111315',
            'direccion_id' => 16
          ],
          [
            'nombreRazon' => 'Mendez',
            'nitCi' => '1454646',
            'direccion_id' => 17
          ],
          [
            'nombreRazon' => 'Poma',
            'nitCi' => '75155391',
            'direccion_id' => 18
          ],
          [
            'nombreRazon' => 'Velez',
            'nitCi' => '2658412',
            'direccion_id' => 19
          ],
          [
            'nombreRazon' => 'Soliz',
            'nitCi' => '7448762f',
            'direccion_id' => 20
          ],

        ]);
    }
}
