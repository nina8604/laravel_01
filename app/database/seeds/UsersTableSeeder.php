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
    	\DB::table('users')->insert([
			'name' => 'zloylev',
			'first_name' => 'Oleh',
			'last_name' => 'Lev',
			'role' => 'admin',
			'email' => 'admin@test.com',
			'password' => bcrypt('123456789'),
		]);
    }
}
