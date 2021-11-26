<?php


namespace App\Http\Controllers\Api;


use App\Services\Api\ReturnProductService;
use Illuminate\Http\Request;

class ReturnProductController extends ApiController
{
    protected $returnProductService;

    public function __construct(ReturnProductService $returnProductService)
    {
       $this->returnProductService = $returnProductService;
    }
    public function index()
    {
        return response()->json(['data'=>['data'=>$this->returnProductService->getAll()]]);
    }

    public function store(Request $request)
    {
        try {
            $this->returnProductService->store($request);
            return response()->json([
                'data'=>['code' => 200, 'message' => 'Create ReturnProduct successful!'],
            ], 200);
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
            $this->returnProductService->update($request, $id);
            return response()->json([
                'data'=> ['code' => 200, 'message' => 'Update successfully !']
            ],200
            );
        }catch (\Exception $error){
            return response()->json([
                    'data'=>['code' => 500, 'message' => $error->getMessage()]
                ]
            );
        }
    }

    
}
