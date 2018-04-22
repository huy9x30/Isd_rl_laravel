<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function hasSubCategory()
    {
        return $this->belongsTo('App\Sub_category', 'sub_category_id', 'id');
    }
}
