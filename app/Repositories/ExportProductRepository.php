<?php


namespace App\Repositories;


use App\Models\ExportProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExportProductRepository extends BaseRepository
{
    public function __construct(ExportProduct $exportProduct)
    {
        parent::__construct($exportProduct);
    }

    public function getAll()
    {
        return ExportProduct::all();
    }

    public function store($userRequest)
    {
        $newRequest = new ExportProduct;
        $newRequest->product_id = $userRequest['product_id'];
        $newRequest->customer_id = $userRequest['customer_id'];
        $newRequest->quantity = $userRequest['quantity'];
        $newRequest->description = $userRequest['description'];
        $newRequest->price = $userRequest['price'];
        $newRequest->save();

        $theProduct = DB::table('products')->where('id', $newRequest->product_id)->first();
        $realQuantity = $theProduct->quantity - $userRequest['quantity'];
        DB::table('products')->where('id', $newRequest->product_id)->update(["quantity" => $realQuantity]);
        return true;
    }
}
