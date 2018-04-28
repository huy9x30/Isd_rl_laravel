<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Category extends Model
{
	use Sortable;
    protected $table = 'categories';
    public $sortable = ['id',
   	                    'name',
                        'updated_at'];

    public function hasSub()
    {
        return $this->hasMany('App\Sub_category');
    }
}
