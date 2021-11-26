<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExportProduct extends Model
{
    public $table = 'exportproducts';

    protected $fillable = [
        'product_id','customer_id','quantity','price','description'
    ];
}
