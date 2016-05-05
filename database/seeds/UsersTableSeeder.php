<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
				['name' => 'McClain Concepts', 'email' => 'git@mcclainconcepts.com', 'password' => bcrypt('LaravelTestPW')],
				['name' => 'Steve Botello', 'email' => 'srbotello@gmail.com', 'password' => bcrypt('LaravelTestPW')]
        ]);
    }
}
