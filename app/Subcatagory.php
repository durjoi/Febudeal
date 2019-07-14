<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    public function catagories(){
      return $this->belongsTo('App\Catagory');
    }
    public function subcatagories2(){
      return $this->hasMany('App\Subcatagory2');
    }
}
