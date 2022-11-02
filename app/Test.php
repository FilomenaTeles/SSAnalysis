<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function testtype()
    {
        return $this ->belongsTo('App\TestType');
    }

    public function testphase()
    {
        return $this ->belongsTo('App\TestPhase');
    }

    public function studenttests()
    {
        return $this ->hasMany('App\StudentTest');
    }

}
