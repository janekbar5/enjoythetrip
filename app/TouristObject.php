<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristObject extends Model
{
    protected $table = 'tourist_objects';

    /*-------------------------- Lecture 14 --------------------------*/
    public function city() 
    {
        return $this->belongsTo('App\City');
    }
    
    /*-------------------------- Lecture 14 --------------------------*/
    public function photos()
    {   
        return $this->morphMany('App\Photo', 'photoable');
    }
    
    public function scopeOrdered($query)
    {   
        return $query->orderBy('name', 'asc');
    }
    
    
}
