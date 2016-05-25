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
        $this->call(RolesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
