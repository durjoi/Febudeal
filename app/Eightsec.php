<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eightsec extends Model
{
  public function products() {
    return $this->belongsTo('App\Product');
  }
}
