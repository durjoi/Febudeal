<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class To extends Model
{
  public function products() {
    return $this->belongsTo('App\Product');
  }
}
