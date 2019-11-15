<?php

use Illuminate\Database\Seeder;
use Illiminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
          [
            'nombreCategoria' => 'Chocolates',
          ],
          [
            'nombreCategoria' => 'Masitas',
          ],
          [
            'nombreCategoria' => 'Dulces',
          ],
          [
            'nombreCategoria' => 'Embutidos',
          ],
          [
            'nombreCategoria' => 'Lacteos',
          ],
          [
            'nombreCategoria' => 'Gaseosas',
          ],
          [
            'nombreCategoria' => 'Abarrotes',
          ],
          [
            'nombreCategoria' => 'Frutas',
          ],
          [
            'nombreCategoria' => 'Verduras',
          ],
          [
            'nombreCategoria' => 'Carnes',
          ],
        ]);
    }
}
