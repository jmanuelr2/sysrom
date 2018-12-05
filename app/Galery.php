<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    public function photos()
    {
    	return $this->belongsToMany(Photo::class);
    }    
}
