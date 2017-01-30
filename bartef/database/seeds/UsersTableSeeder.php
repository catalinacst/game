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
      DB::table('users')->delete();

      $users = array(
        ['name' => 'Ana Alonso Lopez', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Miguel Fajardo Velasco', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Antonia Martínez García', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Rick Harrison', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Manuel Domínguez Aguilar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'María Jimenéz Diáz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Javier Chacón Avilés', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Pilar Sanz Vilas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Warren Buffett', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );
      
      DB::table('users')->insert($users);
    }
}
