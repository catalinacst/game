<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('StatusTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ObjectsTableSeeder');
        $this->call('CategoryUserTableSeeder');
    }
}
