<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function subcatagories(){
      return $this->hasMany('App\Subcatagory');
    }
}
