<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }

    public function tracks()
    {
        return $this->belongsToMany(Track::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }



}
