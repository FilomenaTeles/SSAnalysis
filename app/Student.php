<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'city',
        'birth_date',
        'email',
        'phone_number',
        'group_id'
    ];

    public function studentTests()
    {
        return $this->hasMany('App\StudentTest');
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
