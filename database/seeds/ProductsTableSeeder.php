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
        for ($i = 0; $i < 10; $i++) {
	         DB::table('products')->insert([
	            'categoryId' => rand(1, 5),
	            'name' => str_random(10),
	            'image' => str_random(10),
	            'description' => str_random(100),
	            'created_at' => '2018-03-11 10:00:00',
	            'updated_at' => '2018-03-11 10:00:00',
	        ]);
        }
    }
}
