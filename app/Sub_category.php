<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    protected $table = 'sub_categories';

    public function hasManyProducts()
    {
        return $this->hasMany('App\Product');
    }
}
