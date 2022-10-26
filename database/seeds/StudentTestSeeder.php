<?php

use Illuminate\Database\Seeder;

class StudentTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ALUNO 1
        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 1,
            'grade'      => 15
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 3,
            'grade'      => 17
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 5,
            'grade'      => 19
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 1,
            'test_id'      => 6,
            'grade'      => 18
        ]);

        //ALUNO 2
        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 1,
            'grade'      => 14
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 3,
            'grade'      => 15
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 4,
            'grade'      => 14
        ]);

        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_tests')->insert([
            'student_id'   => 2,
            'test_id'      => 6,
            'grade'      => 15
        ]);
    }
}
