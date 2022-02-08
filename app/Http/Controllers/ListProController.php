<?php
namespace App\Http\Controller;

use Illuminate\Http\Request;

class Product extends Controller
{
    /** 
    *
    *Display a listing of the resouce.
    *@return \Illunination\Http\Response
    */
    public function index()
    {
        $products = Product ::all();
        return view('product.list')->with('products',$products);
    }
    public function create()
    {
        return view('FormPage');

    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->size = $request->size;
        $product->quantity = $request->quantity;
        $product->warehouse_id = $request->warehouse_id;
        $product->price= $request->price;
        $product->source = $request->source;
        $product->save();
    }

}