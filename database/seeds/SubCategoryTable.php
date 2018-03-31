<?php

use Illuminate\Database\Seeder;
use App\Sub_category;

class SubCategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/sub_categories.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
        	Sub_category::create(array(
        		'category_id' => $obj->category_id,
        		'name' => $obj->name,
        		'created_at' => now(),
        		'updated_at' => now(),
        	));
        }
    }
}
