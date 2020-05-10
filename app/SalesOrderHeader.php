<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrderHeader extends Model
{
    protected $fillable = [
        'customer_name',
        'product_type_id',
        'price',
        'details',

    ];

}
