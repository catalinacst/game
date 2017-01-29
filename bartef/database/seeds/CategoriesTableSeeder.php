<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
   * @return void
     */
    public function run()
    {
      DB::table('categories')->delete();

      $categories = array(
        ['name' => 'Juegos de Consola', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Accesorios computadores', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Accesorios celulares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Electrodomésticos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Ropa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Accesorios ropa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Objetos autografiados', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Libros', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Bicicletas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Motos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Autos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Juegos de mesa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Objetos coleccionables', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Futbol', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Fotografia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      DB::table('categories')->insert($categories);
    }
}
