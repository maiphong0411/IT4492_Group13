<?php


namespace App\Repositories;


use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\ReturnProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReturnProductRepository extends BaseRepository 
{
    public function __construct(ReturnProduct $returnProduct)
    {
        parent::__construct($returnProduct);
    }

    public function getAll()
    {
        return ReturnProduct::all();
    }

    public function store($userRequest)
    {
        $newRequest = new ReturnProduct;
        $newRequest->product_id = $userRequest['product_id'];
        $newRequest->customer_id = $userRequest['customer_id'];
        $newRequest->quantity = $userRequest['quantity'];
        $newRequest->description = $userRequest['description'];
        $newRequest->price = $userRequest['price'];
        $newRequest->save();
        return true;
    }

}
