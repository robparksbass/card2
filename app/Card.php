<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function businesses(){
        return $this->hasOne('Business::class', 'id', 'business_id');
    }
}