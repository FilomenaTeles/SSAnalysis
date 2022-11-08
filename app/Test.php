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

    public function students()
    {
        return $this ->belongsToMany('App\Student')

                        ->withPivot('id','grade');
    }


    protected $fillable = [
        'test_type_id',
        'test_phase_id',
        'test_date'
    ];

}

