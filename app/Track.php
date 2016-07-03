<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public function courses()
    {
    	return $this->belongsToMany(Course::class);
    	// return $this->hasMany(Course::class); // not working
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }

}
