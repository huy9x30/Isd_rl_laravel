<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function hasSub()
    {
        return $this->hasMany('App\Sub_category');
    }
}
