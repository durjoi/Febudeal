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
    public function dotds() {
      return $this->hasOne('App\Dotd');
    }
    public function ymls() {
      return $this->hasOne('App\Yml');
    }
    public function tos() {
      return $this->hasOne('App\To');
    }
    public function fourthsecs() {
      return $this->hasOne('App\Fourthsec');
    }
    public function fifthsecs() {
      return $this->hasOne('App\Fifthsec');
    }
    public function sixthsecs() {
      return $this->hasOne('App\Sixthsec');
    }
    public function seventhsecs() {
      return $this->hasOne('App\Seventhsec');
    }
    public function eightsecs() {
      return $this->hasOne('App\Eightsec');
    }
    public function ninthsecs() {
      return $this->hasOne('App\Ninthsec');
    }
    public function tenthsecs() {
      return $this->hasOne('App\Tenthsec');
    }
    public function offers() {
      return $this->hasOne('App\Offer');
    }
}
