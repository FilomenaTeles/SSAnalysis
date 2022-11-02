<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function testType()
    {
        return $this ->belongsTo('App\TestType');
    }

    public function testPhase()
    {
        return $this ->belongsTo('App\TestPhase');
    }

    public function studentTests()
    {
        return $this ->hasMany('App\StudentTest');
    }

}
