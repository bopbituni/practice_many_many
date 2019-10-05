<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = "bills";

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

    public function Product()
    {
        return $this->belongsToMany(Products::class,'product-bill', "bills_id","products_id");
    }
}
