<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    use Sortable;
    public $sortable = ['id',
                        'title',
                        'updated_at'];

}
