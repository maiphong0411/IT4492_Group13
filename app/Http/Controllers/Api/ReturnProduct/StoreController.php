<?php

namespace App\Http\Controllers\Api\ReturnProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\ReturnProductService;

class StoreController extends Controller
{
    protected $returnProductService;

    public function __construct(ReturnProductService $returnProductService)
    {
       $this->returnProductService = $returnProductService;
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->returnProductService->store($request);
            return response()->json([
                'code' => 200, 
                'message' => 'Create ReturnProduct successful!',
            ]);
        } catch(\Exception $error) {
            return response()->json([
                'code' => 500,
                'message' => $error->getMessage()
            ]);
        }
    }

}
