<?php

use Illuminate\Database\Seeder;

class TestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('test_types')->insert([
            'description'   => 'Técnico'
        ]);

        \DB::table('test_types')->insert([
            'description'   => 'Dinâmicas de Grupo'
        ]);

    }
}
