<?php


namespace App\Http\Controllers\Api;


use App\Services\Api\ProductService;
use Illuminate\Http\Request;

class ProductController extends ApiController
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
       $this->productService = $productService;
    }
    public function index()
    {
        return response()->json([
            'data'=>$this->productService->getAll(),
            'code' => 200
        ]);
    }

    public function store(Request $request)
    {
        try {
            $this->productService->store($request);
            return response()->json([
                'data' =>[
                    'message' => 'Create Product successful!'
                ]
            ]);
        } catch(\Exception $error) {
            return response()->json([
                'data'=> [
                    'code' => 500,
                    'message' => $error->getMessage()
                ]
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->productService->update($request, $id);
            return response()->json([
                'data'=> [
                    'code' => 200, 
                    'message' => 'Update successfully !'
                ]],200
            );
        }catch (\Exception $error){
            return response()->json([
                    'data'=>[
                        'code' => 500, 
                        'message' => $error->getMessage()]
                ]
            );
        }
    }

    
}
