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
        return response()->json([
            'data'=> $this->returnProductService->getAll()
        ]);
    }

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

    public function destroy(Request $request, $id)
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
