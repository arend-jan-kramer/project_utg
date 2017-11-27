<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\carbon;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'description', 'price', 'author_id','category',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'author_id', 'user_id',
    ];

    public function User() {
      return $this->belongsTo(User::class);
    }
}
