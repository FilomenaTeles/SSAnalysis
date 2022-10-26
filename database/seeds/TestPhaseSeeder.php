<?php

use Illuminate\Database\Seeder;

class TestPhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('test_phases')->insert([
            'description'   => 'Fase 1'
        ]);

        \DB::table('test_phases')->insert([
            'description'   => 'Fase 2'
        ]);

        \DB::table('test_phases')->insert([
            'description'   => 'Fase 3'
        ]);
    }
}
