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
    	for ($i = 0; $i < 5; $i++) {
	         DB::table('categories')->insert([
	            'name' => str_random(10),
	            'link' => str_random(10),
	            'created_at' => '2018-03-11 10:00:00',
	            'updated_at' => '2018-03-11 10:00:00',
	        ]);
        }
    }
}
