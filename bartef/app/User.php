<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function objects() {
      return $this->hasMany('App\Object');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
}
