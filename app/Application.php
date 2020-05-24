<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $hidden = ['id', 'rental_id', 'password'];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function data()
    {
        return $this->toArray();
    }
}
