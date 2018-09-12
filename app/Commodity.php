<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    public function spcate()
    {
    	return $this->belongsTo('App\spcate');
    }
}
