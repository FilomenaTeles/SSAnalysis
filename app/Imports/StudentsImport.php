<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'          => $row[0],
            'city'          => $row[1],
            'birth_date'    => $row[2],
            'email'         => $row[3],
            'phone_number'  => $row[4],
            'group_id'      => $row[5],
        ]);
    }
}
