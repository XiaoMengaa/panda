<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function cate()
    {
    	return $this->belongsTo('App\Cate');
    }
}
