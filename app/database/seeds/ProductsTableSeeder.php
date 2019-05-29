<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 1; $i < 7; $i++){
			\DB::table('products')->insert([
				'sku' => random_int(1,1024),
				'name' => 'name #'.$i,
				'cat_id' => $i,
				'description' => 'description #'.$i,
				'price' => random_int(1,7)*11.52,
				'stock' => random_int(1,26),
				'image' => 'image #'.$i,
			]);
		}
    }
}