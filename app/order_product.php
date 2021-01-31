<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'price', 'quantity', 'total', 'created_at', 'updated_at',
   ];

    protected $table = 'order_product';

}
