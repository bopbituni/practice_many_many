<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public function Bills()
    {
        return $this->belongsToMany(Bills::class,"product-bill", "product_id", "bill_id");
    }
}
