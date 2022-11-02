<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function studentTests()
    {
        return $this->hasMany('App\StudentTest');
    }
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
