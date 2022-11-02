<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function studentTests()
    {
        return $this->hasMany('App\StudentTest');
    }
<<<<<<< HEAD
=======

>>>>>>> d343fc7afb792963a3779a1282f017250a27246d
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
