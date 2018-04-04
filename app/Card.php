<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function business(){
        return $this->hasOne('App\Business', 'id', 'business_id');
    }
}