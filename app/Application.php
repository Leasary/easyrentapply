<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $hidden = ['password'];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
