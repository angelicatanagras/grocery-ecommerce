<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price','details', 'product_type_id'
    ];

    //all fillables are data that need to create, update always

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }
}

