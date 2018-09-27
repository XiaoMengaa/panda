<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'problem_tag', 'problem_id', 'tag_id');
    }

    public function cate()
    {
    	return $this -> belongsTo('App\Cate');
    }
}
