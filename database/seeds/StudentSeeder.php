<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            'group_id'   => 1,
            'name'      => 'Pedro Pinto',
            'city'      => 'Ermesinde',
            'birth_date'      => '1994-08-21',
            'email'      => 'pedropinto@mail.com',
            'phone_number'      => '919087651',
        ]);

        \DB::table('students')->insert([
            'group_id'   => 2,
            'name'      => 'Diogo Sousa',
            'city'      => 'Porto',
            'birth_date'      => '1992-10-05',
            'email'      => 'diogosousa@mail.com',
            'phone_number'      => '911209678',
        ]);

        \DB::table('students')->insert([
            'group_id'   => 3,
            'name'      => 'Maria Almeida',
            'city'      => 'Vila Nova de Gaia',
            'birth_date'      => '1990-02-17',
            'email'      => 'mariaalmeida@mail.com',
            'phone_number'      => '9100873211',
        ]);

        \DB::table('students')->insert([
            'group_id'   => 4,
            'name'      => 'Josefina Moreira',
            'city'      => 'Maia',
            'birth_date'      => '1980-04-20',
            'email'      => 'josefinamoreira@mail.com',
            'phone_number'      => '935647890',
        ]);

        \DB::table('students')->insert([
            'group_id'   => 5,
            'name'      => 'António Tavares',
            'city'      => 'Matosinhos',
            'birth_date'      => '1999-12-01',
            'email'      => 'antoniotavares@mail.com',
            'phone_number'      => '920987112',
        ]);
    }
}
