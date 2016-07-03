<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseCategories = App\CourseCategory::all();

//collect(['Marketing', 'Education', 'Sales']);
// 'colors' => ['Black', 'Mahogany']


        foreach($courseCategories as $category)
        {

        	$this->getCourseName($category->name)
        	     ->each(function($coursename) use ($category){

        		factory(App\Course::class)->create([
	        		'course_category_id' => $category->id,
	        		'name' => $coursename
	        	]);

        	});
        }
    }

    protected function getCourseName($courseCategoryName)
     {
        $courses = collect([
        	"Design" => ['Drawing', 'Logo Design', 'Illustration', 'Poster Design'],
			"Development"=> ['Programming 101', 'Mobile Apps', 'Database'],
			"Business"=>['Communication', 'Leadership', 'Project Management'],
			"Education"=>['Elearning', 'Instructional Design', 'Moodle'],
			"IT"=>['Cloud Computing', 'Operating Systems']
        ]);

         $courseNames = collect($courses[$courseCategoryName]);

         return $courseNames;
    }
}
