<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
	         DB::table('feedbacks')->insert([
	            'title' => str_random(40),
	            'content' => str_random(100),
	            'created_at' => '2018-03-11 10:00:00',
	            'updated_at' => '2018-03-11 10:00:00',
	        ]);
        }
    }
}
