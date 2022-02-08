<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    public $table = 'returnproducts';

    protected $fillable = [ 
        'product_id', 'customer_id','quantity', 'price', 'description', 'from', 'to', 'state'
       
    ];
}
