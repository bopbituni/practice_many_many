<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';

    public function bills()
    {
        return $this->hasMany(Bills::class);
    }
}
