<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Sub_category extends Model
{
	use Sortable;
    protected $table = 'sub_categories';
    public $sortable = ['id',
                        'name',
                        'updated_at'];


    public function hasManyProducts()
    {
        return $this->hasMany('App\Product');
    }

    public function hasCategory()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
