<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function cards(){
        return $this->belongsToMany('Card::class', 'business_id', 'id');
    }
}