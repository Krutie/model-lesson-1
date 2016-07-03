<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		 $depts = App\Department::all();

		 foreach($depts as $dept)
		 {
		 	factory('App\User', 3)->create([
		 		'department_id' => $dept->id
		 	]);
		 }
	}

}