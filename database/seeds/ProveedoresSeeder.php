<?php

use Illuminate\Database\Seeder;
use Illiminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedors')->insert([
          [
            'nombreProveedor' => 'Pil',
            'web' => 'www.pil.com',
            'nit' => '4519142',
            'telefono' => 72300123,
            'idDireccion' => 1,
          ],
          [
            'nombreProveedor' => 'Ceab',
            'web' => 'www.ceab.com',
            'nit' => '7459112',
            'telefono' => 72300111,
            'idDireccion' => 2,
          ],
          [
            'nombreProveedor' => 'Arcor',
            'web' => 'www.arcor.com',
            'nit' => '6429113',
            'telefono' => 72300112,
            'idDireccion' => 3,
          ],
          [
            'nombreProveedor' => 'ALG',
            'web' => 'www.alg.com',
            'nit' => '1429213',
            'telefono' => 72300113,
            'idDireccion' => 4,
          ],
          [
            'nombreProveedor' => 'Cocacola',
            'web' => 'www.coca-cola.com',
            'nit' => '5842921',
            'telefono' => 72300114,
            'idDireccion' => 5,
          ],
          [
            'nombreProveedor' => 'Ferrari',
            'web' => 'www.ferrari.com',
            'nit' => '9872231',
            'telefono' => 72300115,
            'idDireccion' => 6,
          ],
          [
            'nombreProveedor' => 'Frutalin',
            'web' => 'www.frutalin.com',
            'nit' => '24763278',
            'telefono' => 72300116,
            'idDireccion' => 7,
          ],
          [
            'nombreProveedor' => 'Verdurin',
            'web' => 'www.verdurin.com',
            'nit' => '24781110',
            'telefono' => 72300117,
            'idDireccion' => 8,
          ],
          [
            'nombreProveedor' => 'Sofia',
            'web' => 'www.sofia.com',
            'nit' => '24779010',
            'telefono' => 72300118,
            'idDireccion' => 9,
          ],
          [
            'nombreProveedor' => 'Estrella',
            'web' => 'www.estrella.com',
            'nit' => '32479080',
            'telefono' => 72300119,
            'idDireccion' => 10,
          ],
        ]);
    }
}
