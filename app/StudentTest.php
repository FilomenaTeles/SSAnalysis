<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentTest extends Model
{
    public function student()
    {
        return $this ->belongsTo('App\Student');
    }
    public function test()
    {
        return $this ->belongsTo('App\Test');
    }
}
