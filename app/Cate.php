<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
	public function tag(){
		return $this->hasMany('App\Tag');
	}
    
}
