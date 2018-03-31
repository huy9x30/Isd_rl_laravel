<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function hasSubCategory()
    {
        return $this->hasOne('App\Sub_category');
    }
}
