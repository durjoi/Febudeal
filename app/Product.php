<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function salers() {
      return $this->belongsTo('App\Saler');
    }
}
