<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'firstname' => str_random(6),
        	'lastname' => str_random(6),
        	'email' => str_random(6).'@gmail.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
