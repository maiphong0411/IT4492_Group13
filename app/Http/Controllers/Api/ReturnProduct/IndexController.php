<?php

namespace App\Http\Controllers\Api\ReturnProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\ReturnProductService;

class IndexController extends Controller
{
    protected $returnProductService;

    public function __construct(ReturnProductService $returnProductService)
    {
       $this->returnProductService = $returnProductService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data'=> $this->returnProductService->getAll()
        ]);
    }
}
