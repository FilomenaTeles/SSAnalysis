<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tests')->insert([
            'test_type_id'   => 1,
            'test_phase_id'      => 1,
            'test_date'      => '2022-06-22'
        ]);
        \DB::table('tests')->insert([
            'test_type_id'   => 2,
            'test_phase_id'      => 1,
            'test_date'      => '2022-06-22'
        ]);

        \DB::table('tests')->insert([
            'test_type_id'   => 1,
            'test_phase_id'      => 2,
            'test_date'      => '2022-09-22'
        ]);
        \DB::table('tests')->insert([
            'test_type_id'   => 2,
            'test_phase_id'      => 2,
            'test_date'      => '2022-09-22'
        ]);

        \DB::table('tests')->insert([
            'test_type_id'   => 1,
            'test_phase_id'      => 3,
            'test_date'      => '2022-11-15'
        ]);
        \DB::table('tests')->insert([
            'test_type_id'   => 2,
            'test_phase_id'      => 3,
            'test_date'      => '2022-11-15'
        ]);
    }
}
