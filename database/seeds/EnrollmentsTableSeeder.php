<?php

use Illuminate\Database\Seeder;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = App\Course::all();

        $users = App\User::all();

        $users->each(function($userRec) use ($courses){
        	for($i=0; $i<=1; $i++){
	        	factory('App\Enrollment')->create([
	        		 'student_id' => $userRec->id,
	        		'course_id' => $courses[$i]->id
	        	]);
	        }

        });
    }
}
