<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub2catagory extends Model
{
  public function subcatagories(){
    return $this->belongsTo('App\Subcatagory');
  }
  public function products() {
    return $this->hasMany('App\Product');
  }
}
