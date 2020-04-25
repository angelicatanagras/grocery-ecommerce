<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrderHeader extends Model
{
    protected $fillable = [
        'customer_name', 'price','details', 'product_type_id'
    ];

}
