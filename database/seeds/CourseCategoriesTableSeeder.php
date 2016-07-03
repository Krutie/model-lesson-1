<?php

use Illuminate\Database\Seeder;

class CourseCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\CourseCategory', 5)->create();
    }
}
