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
    	  $this->call(OrganisationsTableSeeder::class);
    	  $this->call(DepartmentsTableSeeder::class);
    	  $this->call(UsersTableSeeder::class);
    	  $this->call(CourseCategoriesTableSeeder::class);
    	  $this->call(CoursesTableSeeder::class);
    	  $this->call(TracksTableSeeder::class);
    	  $this->call(PivotTableSeeder::class);
    	  $this->call(EnrollmentsTableSeeder::class);
    }
}
