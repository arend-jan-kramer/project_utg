<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    protected $table = 'usertype';

    public function user() {
      return $this->belongsTo('user');
    }
}
