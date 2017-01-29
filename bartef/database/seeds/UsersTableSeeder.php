<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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

      $faker = Faker::create();
      foreach (range(1, 9) as $index) {
        DB::table('users')->insert([
            'name' => $faker->name,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
      }
    }
}
