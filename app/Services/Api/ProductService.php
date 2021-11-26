<?php


namespace App\Services\Api;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;
use App\Services\AbstractService;
use http\Env\Request;
use http\Exception\InvalidArgumentException;


class ProductService extends AbstractService 
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll(){
        return $this->productRepository->getAll();
    }

    public function store($data)
    {
        $validated = $data->validate([
            'id' => 'required',
            'name' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'warehouse_id' => 'required',
            'source' => 'required',
            'price' => 'required',
        ]);

        if(!$validated){
            throw new InvalidArgumentException($validated->errors()->first());
        }

        $userRequest = $data->toArray();

        return $this->productRepository->store($userRequest);
    }

    public function update($request, $id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'source' => 'required',
            'warehouse_id' => 'required',
            'price' => 'required'
        ]);

        if(!$validated)
        {
            throw new InvalidArgumentException($validated->errors()->fisrt());
        }

        $product = $request->toArray();

        return $this->productRepository->find($id)->update($product);
    }

}