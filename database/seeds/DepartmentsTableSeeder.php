<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orgs = App\Organisation::all();

        $depts = collect(['Marketing', 'Education', 'Sales', 'ICT']);

        foreach($orgs as $org)
        {
        	$depts->each(function($deptName) use ($org) {
        		factory('App\Department')->create([

        		'organisation_id' => $org->id,
        		'name' => $deptName
        		]);
        	});
        }
    }
}
