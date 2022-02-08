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
        $returnproducts = ReturnProduct::all();
        return view('returnproduct.list')->with('returnproducts',$returnproducts);
    }
}