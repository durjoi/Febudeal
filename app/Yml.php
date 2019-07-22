<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yml extends Model
{
  public function products() {
    return $this->belongsTo('App\Product');
  }
}
