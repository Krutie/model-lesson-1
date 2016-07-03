<?php

use Illuminate\Database\Seeder;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// get all users
    	$users = App\User::all();

    	// get all tracks
    	$tracks = App\Track::all();

    	$users->each(function($user) use ($tracks){
    		$user->tracks()->attach($tracks->random());
    	});

    	// get all courses
    	$courses = App\Course::all();

    	$courses->each(function($course) use ($tracks){
    		$course->tracks()->attach($tracks->random());
    	});
    }
}
