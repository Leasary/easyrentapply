<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function fullAddress()
    {
        return "{$this->address} {$this->city}, {$this->state} {$this->zipcode}";
    }
}
