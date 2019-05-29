<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for($i = 1; $i < 7; $i++){
			\DB::table('categories')->insert([
				'name' => 'name category #'.$i,
				'description' => 'description category #'.$i,
			]);
		}
    }
}
