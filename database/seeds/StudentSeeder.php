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

        /* ------ TURMA ID 1 --------*/
        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Pedro Pinto',
            'city'          => 'Ermesinde',
            'birth_date'    => '1994-08-21',
            'email'         => 'pedropinto@mail.com',
            'phone_number'  => '919087651',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'José Sá',
            'city'          => 'Matosinhos',
            'birth_date'    => '1994-09-17',
            'email'         => 'jose@mail.com',
            'phone_number'  => '912399087',
        ]);
        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Marta Lopes',
            'city'          => 'Matosinhos',
            'birth_date'    => '1994-09-17',
            'email'         => 'marta@mail.com',
            'phone_number'  => '912399087',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Raquel Sá',
            'city'          => 'Porto',
            'birth_date'    => '1994-09-17',
            'email'         => 'raquel@mail.com',
            'phone_number'  => '912399087',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'António Carreira',
            'city'          => 'Gondomar',
            'birth_date'    => '1990-10-07',
            'email'         => 'antonio@mail.com',
            'phone_number'  => '910000000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Lia Mendes',
            'city'          => 'Rio Tinto',
            'birth_date'    => '1987-01-07',
            'email'         => 'lia@mail.com',
            'phone_number'  => '910000000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Jorge Nunes',
            'city'          => 'Vila Nova de Gaia',
            'birth_date'    => '2000-01-03',
            'email'         => 'jorge@mail.com',
            'phone_number'  => '911001000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Marcos Sousa',
            'city'          => 'Porto',
            'birth_date'    => '2002-11-24',
            'email'         => 'marco@mail.com',
            'phone_number'  => '911001000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Ana Marques',
            'city'          => 'Vila Nova de Gaia',
            'birth_date'    => '1984-06-23',
            'email'         => 'ana@mail.com',
            'phone_number'  => '931001200',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Janine Silva',
            'city'          => 'Maia',
            'birth_date'    => '1989-09-30',
            'email'         => 'janine@mail.com',
            'phone_number'  => '960001000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Tiago Rios',
            'city'          => 'Valongo',
            'birth_date'    => '2001-12-01',
            'email'         => 'tiago@mail.com',
            'phone_number'  => '960001000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Bruno Mendes',
            'city'          => 'Maia',
            'birth_date'    => '2003-11-17',
            'email'         => 'bruno@mail.com',
            'phone_number'  => '910091000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Leonor Pinto',
            'city'          => 'Vila Nova de Gaia',
            'birth_date'    => '1988-07-31',
            'email'         => 'leonor@mail.com',
            'phone_number'  => '933331000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'André Santos',
            'city'          => 'Porto',
            'birth_date'    => '1997-02-02',
            'email'         => 'andre@mail.com',
            'phone_number'  => '966101001',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Manuela Ribeiro',
            'city'          => 'Matosinhos',
            'birth_date'    => '1995-01-07',
            'email'         => 'manuela@mail.com',
            'phone_number'  => '919999000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Vitor Ribeiro',
            'city'          => 'Matosinhos',
            'birth_date'    => '1999-05-12',
            'email'         => 'vitor@mail.com',
            'phone_number'  => '919333000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Cátia Duarte',
            'city'          => 'Maia',
            'birth_date'    => '2000-12-05',
            'email'         => 'catia@mail.com',
            'phone_number'  => '919999022',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Afonso Tomás',
            'city'          => 'Ermesinde',
            'birth_date'    => '1992-04-09',
            'email'         => 'afonso@mail.com',
            'phone_number'  => '930009000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Eduarda Santos',
            'city'          => 'Maia',
            'birth_date'    => '1993-06-25',
            'email'         => 'eduarda@mail.com',
            'phone_number'  => '919009000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 1,
            'name'          => 'Joaquim Martins',
            'city'          => 'Porto',
            'birth_date'    => '1985-09-30',
            'email'         => 'joaquim@mail.com',
            'phone_number'  => '913333300',
        ]);


        /* ------ TURMA ID 2 --------*/

        \DB::table('students')->insert([
            'group_id'      => 2,
            'name'          => 'Diogo Sousa',
            'city'          => 'Porto',
            'birth_date'    => '1992-10-05',
            'email'         => 'diogosousa@mail.com',
            'phone_number'  => '911209678',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 2,
            'name'          => 'Leandro Marques',
            'city'          => 'Porto',
            'birth_date'    => '1994-11-15',
            'email'         => 'leandro@mail.com',
            'phone_number'  => '910060000',
        ]);

        \DB::table('students')->insert([
            'group_id'      => 2,
            'name'          => 'Cíntia Mendes',
            'city'          => 'Maia',
            'birth_date'    => '1989-01-19',
            'email'         => 'cintia@mail.com',
            'phone_number'  => '961111119',
        ]);

        /* ------ TURMA ID 3 --------*/

        \DB::table('students')->insert([
            'group_id'      => 3,
            'name'          => 'Maria Almeida',
            'city'          => 'Vila Nova de Gaia',
            'birth_date'    => '1990-02-17',
            'email'         => 'mariaalmeida@mail.com',
            'phone_number'  => '9100873211',
        ]);

        /* ------ TURMA ID 4 --------*/

        \DB::table('students')->insert([
            'group_id'      => 4,
            'name'          => 'Josefina Moreira',
            'city'          => 'Maia',
            'birth_date'    => '1980-04-20',
            'email'         => 'josefinamoreira@mail.com',
            'phone_number'  => '935647890',
        ]);

        /* ------ TURMA ID 5 --------*/

        \DB::table('students')->insert([
            'group_id'      => 5,
            'name'          => 'António Tavares',
            'city'          => 'Matosinhos',
            'birth_date'    => '1999-12-01',
            'email'         => 'antoniotavares@mail.com',
            'phone_number'  => '920987112',
        ]);

    }
}
