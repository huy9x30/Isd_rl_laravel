<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function hasCategory()
    {
        return $this->hasOne('App\Category');
    }
}
