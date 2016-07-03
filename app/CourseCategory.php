<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    public function courses()
    {
    	return $this->hasMany(Course::class);
    }
}