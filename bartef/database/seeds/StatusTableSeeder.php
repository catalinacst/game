<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status')->delete();

      $status = array(
        ['flag' => 0, 'password' => Hash::make('developerbcc')]
      );

      DB::table('status')->insert($status);
    }
}
