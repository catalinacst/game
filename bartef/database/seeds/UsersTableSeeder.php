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
        ['name' => 'Usuario', 'interests' => '000000000000000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Ana Alonso Lopez', 'interests' => '101111001101011', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Antonia Martínez García', 'interests' => '000001011000111', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Rick Harrison', 'interests' => '100011101011110', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Manuel Domínguez Aguilar', 'interests' => '100101010010001', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'María Jimenéz Diáz', 'interests' => '110101011101010', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Javier Chacón Avilés', 'interests' => '100101000001101', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Pilar Sanz Vilas', 'interests' => '000010000110001', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Warren Buffett', 'interests' => '110100010011101', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      DB::table('users')->insert($users);
    }
}
