<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          DirecionesSeeder::class,
          ProveedoresSeeder::class,
          CategoriasSeeder::class,
          ProductosSeeder::class,
          HistorialEntregaSeeder::class,
          AlmacenSeeder::class,
          VentaSeeder::class,
          HistorialVentaSeeder::class,
          ClienteSeeder::class,
          TelefonoSeeder::class,
          CompraSeeder::class,
        ]);
    }
}
