<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable = [
        'course_id',
        'edition',
    ];

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
