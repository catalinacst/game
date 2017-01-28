<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        ['id' => 0, 'name' => 'usuario#'],
        ['id' => 1, 'name' => 'usuario#'],
        ['id' => 2, 'name' => 'usuario#'],
        ['id' => 3, 'name' => 'usuario#'],
        ['id' => 4, 'name' => 'usuario#'],
        ['id' => 5, 'name' => 'usuario#'],
        ['id' => 6, 'name' => 'usuario#'],
        ['id' => 7, 'name' => 'usuario#'],
        ['id' => 8, 'name' => 'usuario#'],
      );

      DB::table('types')->insert($types);
    }
}
