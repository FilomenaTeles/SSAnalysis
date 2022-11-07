<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function tests()
    {
        return $this->belongsToMany('App\Test')
                    ->withPivot('grade');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
