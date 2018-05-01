<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
	use Sortable;
    protected $table = 'products';
    public $sortable = ['id',
                        'name',
                        'updated_at'];

    public function hasSubCategory()
    {
        return $this->belongsTo('App\Sub_category', 'sub_category_id', 'id');
    }

    public function each(){
    	return $this->all();
    }
}
