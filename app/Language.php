<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Language;

class Language extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'language_id', 'translation'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [];
}
