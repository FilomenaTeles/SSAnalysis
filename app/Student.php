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
