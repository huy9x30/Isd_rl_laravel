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
	         DB::table('categories')->insert([
	            'name' => "Thiết bị an ninh",
	            'created_at' => now(),
	            'updated_at' => now(),
	        ]);

             DB::table('categories')->insert([
                'name' => "Thiết bị PCCC",
                'created_at' => now(),
                'updated_at' => now(),
            ]);

             DB::table('categories')->insert([
                'name' => "Thiết bị chống sét",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
