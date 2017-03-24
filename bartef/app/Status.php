<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Status extends Authenticatable
{

    protected $fillable = ['password'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';
}
