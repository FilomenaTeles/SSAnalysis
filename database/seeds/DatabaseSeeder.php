<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TestTypeSeeder::class);
        $this->call(TestPhaseSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(StudentTestSeeder::class);

    }
}
