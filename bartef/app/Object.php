<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'objects';
}
