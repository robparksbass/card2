<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function business(){
        return $this->hasOne('App\Business', 'id', 'business_id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}