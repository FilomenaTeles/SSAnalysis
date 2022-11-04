<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Group');
    }


    protected $fillable = [
      'name',
      'acronym',
    ];

}

