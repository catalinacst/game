<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('types')->delete();

      $types = array(
        ['id' => 0, 'name' => 'Juegos de Consola'],
        ['id' => 1, 'name' => 'Accesorios computadores'],
        ['id' => 2, 'name' => 'Accesorios celulares'],
        ['id' => 3, 'name' => 'Electrodomésticos'],
        ['id' => 4, 'name' => 'Ropa'],
        ['id' => 5, 'name' => 'Accesorios ropa'],
        ['id' => 6, 'name' => 'Objetos autografiados'],
        ['id' => 7, 'name' => 'Libros'],
        ['id' => 8, 'name' => 'Bicicletas'],
        ['id' => 9, 'name' => 'Motos'],
        ['id' => 10, 'name' => 'Autos'],
        ['id' => 11, 'name' => 'Juegos de mesa'],
        ['id' => 12, 'name' => 'Objetos coleccionables'],
        ['id' => 13, 'name' => 'Futbol'],
        ['id' => 14, 'name' => 'Fotografia'],
      );

      DB::table('types')->insert($types);
    }
}
