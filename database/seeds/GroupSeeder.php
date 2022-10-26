<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('groups')->insert([
            'course_id'   => 1,
            'edition'      => 'WMD0622'
        ]);

        \DB::table('groups')->insert([
            'course_id'   => 2,
            'edition'      => 'GRSI0921'
        ]);

        \DB::table('groups')->insert([
            'course_id'   => 3,
            'edition'      => 'SD1122'
        ]);

        \DB::table('groups')->insert([
            'course_id'   => 4,
            'edition'      => 'CISEG0921'
        ]);

        \DB::table('groups')->insert([
            'course_id'   => 5,
            'edition'      => 'TPSI1021'
        ]);
    }
}
