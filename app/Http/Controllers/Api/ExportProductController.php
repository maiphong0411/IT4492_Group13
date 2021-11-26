<?php


namespace App\Http\Controllers\Api;


use App\Services\Api\ExportProductService;
use Illuminate\Http\Request;

class ExportProductController extends ApiController
{
    protected $exportProductService;

    public function __construct(ExportProductService $exportProductService)
    {
       $this->exportProductService = $exportProductService;
    }
    public function index()
    {
        return response()->json(['data'=>['data'=>$this->exportProductService->getAll()]]);
    }

    public function store(Request $request)
    {
        try {
            $this->exportProductService->store($request);
            return response()->json([
                'data'=>['code' => 200, 'message' => 'Create ExportProduct successful!'],
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
            $this->exportProductService->update($request, $id);
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
