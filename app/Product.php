<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function salers() {
      return $this->belongsTo('App\Saler');
    }
    public function sub2catagories() {
      return $this->belongsTo('App\Sub2catagory');
    }
}
