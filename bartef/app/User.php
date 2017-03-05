<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function objects() {
      return $this->hasMany('App\Object')->orderBy('updated_at', 'desc');
    }

    public function interests() {
      return $this->belongsToMany('App\Category', 'category_user');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
}
