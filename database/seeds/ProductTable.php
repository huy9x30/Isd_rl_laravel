<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/products.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Product::create(array(
                'sub_category_id' => $obj->sub_category_id,
                'name'            => $obj->name,
                'image'           => $obj->image,
                'description'     => $obj->description,
                'created_at'      => now(),
                'updated_at'      => now(),
            ));
        }
    }
}
