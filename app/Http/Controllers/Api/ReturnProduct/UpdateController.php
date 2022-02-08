<?php

namespace App\Http\Controllers\Api\ReturnProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\ReturnProductService;

class UpdateController extends Controller
{
    protected $returnProductService;

    public function __construct(ReturnProductService $returnProductService)
    {
       $this->returnProductService = $returnProductService;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->returnProductService->update($request, $id);
            return response()->json([
                'code' => 200, 
                'message' => 'Update successfully !'
            ]);
        }catch (\Exception $error){
            return response()->json([
                'code' => 500, 
                'message' => $error->getMessage()
            ]);
        }
    }

}
