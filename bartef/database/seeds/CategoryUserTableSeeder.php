<?php

use Illuminate\Database\Seeder;

class CategoryUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category_user')->delete();

      $category_user = array(
        ['user_id' => 2, 'category_id' => 4],
        ['user_id' => 2, 'category_id' => 5],
        ['user_id' => 3, 'category_id' => 8],
        ['user_id' => 4, 'category_id' => 12],
        ['user_id' => 4, 'category_id' => 13],
        ['user_id' => 5, 'category_id' => 1],
        ['user_id' => 5, 'category_id' => 2],
        ['user_id' => 5, 'category_id' => 14],
        ['user_id' => 6, 'category_id' => 3],
        ['user_id' => 6, 'category_id' => 6],
        ['user_id' => 6, 'category_id' => 7],
        ['user_id' => 7, 'category_id' => 9],
        ['user_id' => 7, 'category_id' => 15],
        ['user_id' => 8, 'category_id' => 8],
        ['user_id' => 8, 'category_id' => 10],
        ['user_id' => 8, 'category_id' => 13],
        ['user_id' => 9, 'category_id' => 7],
        ['user_id' => 9, 'category_id' => 14],
      );

      DB::table('category_user')->insert($category_user);
    }
}
