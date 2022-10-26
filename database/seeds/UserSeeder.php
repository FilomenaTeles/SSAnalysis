<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'          => 'Admin',
            'email'         =>'admin@mail.pt',
            'user_type_id'  => 1,
            'password'      => bcrypt('pass')
        ]);

        \DB::table('users')->insert([
            'name'          => 'Ana',
            'email'         =>'ana@mail.pt',
            'user_type_id'  => 2,
            'password'      => bcrypt('pass')
        ]);

        \DB::table('users')->insert([
            'name'          => 'Telma',
            'email'         =>'telma@mail.pt',
            'user_type_id'  => 2,
            'password'      => bcrypt('pass')
        ]);

    }
}
