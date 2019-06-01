<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
		$users = DB::table('users')->get();
		foreach($users as $user){
			$products = DB::table('products')->get()->random(random_int(1,20));

			$products -> map(function($el) use($user){
				DB::table('carts')->insert([
					'user_id' => $user->id,
					'product_id' => $el -> id,
					'created_at' => now(),
					'updated_at' => now(),
				]);
			});
		}
    }
}
