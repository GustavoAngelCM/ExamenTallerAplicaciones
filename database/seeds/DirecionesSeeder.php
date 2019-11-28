<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirecionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('direccions')->insert([
          [
            'calle' => 'Av. Avaroa',
            'numero' => 1,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. España',
            'numero' => 2,
            'comuna' => 'Quillacollo',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. 6 de Agosto',
            'numero' => 3,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. 6 de Octubre',
            'numero' => 4,
            'comuna' => 'Cercado',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. Pairumani',
            'numero' => 5,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Calle 1',
            'numero' => 6,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. del Ejercito',
            'numero' => 7,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
          [
            'calle' => 'Teniente Benavidez',
            'numero' => 8,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'La Plata',
            'numero' => 9,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
          [
            'calle' => 'Junion',
            'numero' => 10,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
          [
            'calle' => 'Av. Avaroa',
            'numero' => 11,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. España',
            'numero' => 12,
            'comuna' => 'Quillacollo',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. 6 de Agosto',
            'numero' => 13,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. 6 de Octubre',
            'numero' => 14,
            'comuna' => 'Cercado',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. Pairumani',
            'numero' => 15,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Calle 1',
            'numero' => 16,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'Av. del Ejercito',
            'numero' => 17,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
          [
            'calle' => 'Teniente Benavidez',
            'numero' => 18,
            'comuna' => 'Vinto',
            'ciudad' => 'Cochabamba'
          ],
          [
            'calle' => 'La Plata',
            'numero' => 19,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
          [
            'calle' => 'Junion',
            'numero' => 20,
            'comuna' => 'Cercado',
            'ciudad' => 'Oruro'
          ],
        ]);
    }
}
