<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public  function country(){
        return  $this->belongsTo('App\Country');
    }
    public function bicycles(){
        return $this->hasMany('App\Bicycle');
    }
}
