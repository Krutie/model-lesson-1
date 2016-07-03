<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function tracks()
    {
    	return $this->belongsToMany(Track::class);
    }

    public function saveTo(Track $track)
	{
		return $this->tracks()->save($track);
	}

	public function enrollments()
    {
    	return $this->hasMany(Enrollment::class);
    }

    public function coursecategory()
    {
    	return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }



}
