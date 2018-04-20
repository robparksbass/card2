<?php

namespace App;

class Card extends Model
{
    public function business(){
        return $this->hasOne('App\Business', 'id', 'business_id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}