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
        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 1,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 3,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 5,
            'grade'      => 19
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 1,
            'test_id'      => 6,
            'grade'      => 18
        ]);

        //ALUNO 2
        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 1,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 3,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 4,
            'grade'      => 14
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 2,
            'test_id'      => 6,
            'grade'      => 15
        ]);

        //ALUNO 3
        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 1,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 2,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 3,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 5,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 3,
            'test_id'      => 6,
            'grade'      => 19
        ]);

        //ALUNO 4
        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 1,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 4,
            'grade'      => 13
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 4,
            'test_id'      => 6,
            'grade'      => 14
        ]);

        //ALUNO 5
        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 1,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 2,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 4,
            'grade'      => 17
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 5,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 5,
            'test_id'      => 6,
            'grade'      => 16
        ]);

        //ALUNO 6
        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 1,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 4,
            'grade'      => 15
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 5,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 6,
            'test_id'      => 6,
            'grade'      => 14
        ]);

        //ALUNO 7
        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 1,
            'grade'      => 18
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 3,
            'grade'      => 19
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 4,
            'grade'      => 18
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 5,
            'grade'      => 19
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 7,
            'test_id'      => 6,
            'grade'      => 18
        ]);

        //ALUNO 8
        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 1,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 3,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 4,
            'grade'      => 15
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 8,
            'test_id'      => 6,
            'grade'      => 16
        ]);

        //ALUNO 9
        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 1,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 3,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 4,
            'grade'      => 13
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 5,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 9,
            'test_id'      => 6,
            'grade'      => 14
        ]);

        //ALUNO 10
        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 1,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 4,
            'grade'      => 17
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 10,
            'test_id'      => 6,
            'grade'      => 18
        ]);

        //ALUNO 11
        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 1,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 3,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 11,
            'test_id'      => 6,
            'grade'      => 17
        ]);

        //ALUNO 12
        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 1,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 2,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 4,
            'grade'      => 17
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 12,
            'test_id'      => 6,
            'grade'      => 19
        ]);

        //ALUNO 13
        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 1,
            'grade'      => 12
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 2,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 3,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 4,
            'grade'      => 15
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 5,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 13,
            'test_id'      => 6,
            'grade'      => 15
        ]);

        //ALUNO 14
        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 1,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 3,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 5,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 14,
            'test_id'      => 6,
            'grade'      => 15
        ]);

        //ALUNO 15
        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 1,
            'grade'      => 11
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 2,
            'grade'      => 13
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 3,
            'grade'      => 10
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 4,
            'grade'      => 12
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 5,
            'grade'      => 11
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 15,
            'test_id'      => 6,
            'grade'      => 11
        ]);

        //ALUNO 16
        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 1,
            'grade'      => 11
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 3,
            'grade'      => 10
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 4,
            'grade'      => 12
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 5,
            'grade'      => 10
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 16,
            'test_id'      => 6,
            'grade'      => 13
        ]);

        //ALUNO 17
        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 1,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 17,
            'test_id'      => 6,
            'grade'      => 18
        ]);

        //ALUNO 18
        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 1,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 3,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 5,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 18,
            'test_id'      => 6,
            'grade'      => 17
        ]);

        //ALUNO 19
        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 1,
            'grade'      => 15
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 2,
            'grade'      => 14
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 3,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 4,
            'grade'      => 14
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 5,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 19,
            'test_id'      => 6,
            'grade'      => 15
        ]);

        //ALUNO 20
        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 1,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 2,
            'grade'      => 16
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 3,
            'grade'      => 17
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 4,
            'grade'      => 16
        ]);

        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 5,
            'grade'      => 18
        ]);
        \DB::table('student_test')->insert([
            'student_id'   => 20,
            'test_id'      => 6,
            'grade'      => 17
        ]);
    }
}
