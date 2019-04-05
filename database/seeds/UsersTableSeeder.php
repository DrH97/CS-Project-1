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
    	for ($i=0; $i < 3; $i++) { 
    		DB::table('users')->insert([
        	'username' => '',
        	'firstname' => str_random(6),
        	'lastname' => str_random(6),
        	'gender' => str_random('male','female'),
        	'mobile' => 07 . mt_rand(10000000, 99999999),
        	'email' => str_random(6).'@gmail.com',
        	'password' => bcrypt('password'),
        ]);
    	}
    }
}
