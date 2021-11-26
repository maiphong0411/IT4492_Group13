<?php


namespace App\Repositories;


use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function getAll()
    {
        return Product::all();
    }

    public function store($userRequest)
    {
        $newRequest = new Product;
        $newRequest->id = $userRequest['id'];
        $newRequest->name = $userRequest['name'];
        $newRequest->size = $userRequest['size'];
        $newRequest->quantity = $userRequest['quantity'];
        $newRequest->warehouse_id = $userRequest['warehouse_id'];
        $newRequest->source = $userRequest['source'];
        $newRequest->price = $userRequest['price'];
        $newRequest->save();
        return true;
    }

}
