<?php

namespace App\Http\Controllers\Api\ReturnProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\ReturnProductService;

class DestroyController extends Controller
{
    protected $returnProductService;

    public function __construct(ReturnProductService $returnProductService)
    {
       $this->returnProductService = $returnProductService;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->returnProductService->destroy($id);
            return response()->json([
                'code' => 200, 
                'message' => 'Delete successfully !'
            ]);
        }catch (\Exception $error){
            return response()->json([
                'code' => 500, 
                'message' => $error->getMessage()
            ]);
        }
    }
}
