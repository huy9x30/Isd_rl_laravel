<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function hasProduct()
    {
        return $this->hasMany('App\Product');
    }
}
