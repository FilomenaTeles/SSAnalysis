<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('courses')->insert([
            'acronym'   => 'WMD',
            'name'      => 'Web and Mobile Development'
        ]);

        \DB::table('courses')->insert([
            'acronym'   => 'GRSI',
            'name'      => 'Gestão de Redes e Sistemas Informáticos'
        ]);

        \DB::table('courses')->insert([
            'acronym'   => 'SD',
            'name'      => 'Software Developer'
        ]);

        \DB::table('courses')->insert([
            'acronym'   => 'CISEG',
            'name'      => 'Cibersegurança'
        ]);

        \DB::table('courses')->insert([
            'acronym'   => 'TPSI',
            'name'      => 'Tecnologias e Programação de Sistemas de Informação'
        ]);
    }
}
