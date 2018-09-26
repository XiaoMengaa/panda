<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function cate()
    {
    	return $this->belongsTo('App\Cate');
    }

    public function problems()
    {
    	return $this->belongsToMany('App\Problem', 'problem_tag', 'tag_id', 'problem_id');
    }
}
