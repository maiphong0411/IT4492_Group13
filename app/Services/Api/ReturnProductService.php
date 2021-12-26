<?php


namespace App\Services\Api;


use App\Repositories\ReturnProductRepository;
use App\Services\AbstractService;
use http\Env\Request;
use http\Exception\InvalidArgumentException;


class ReturnProductService extends AbstractService
{
    protected $returnProductRepository;

    public function __construct(ReturnProductRepository $returnProductRepository)
    {
        $this->returnProductRepository = $returnProductRepository;
    }

    public function getAll(){
        return $this->returnProductRepository->getAll();
    }

    public function store($data)
    {
        $validated = $data->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'price' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        if(!$validated){
            throw new InvalidArgumentException($validated->errors()->first());
        }

        $userRequest = $data->toArray();

        return $this->returnProductRepository->store($userRequest);
    }

    public function update($request, $id)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'price' => 'required',
            'from' => 'required',
            'to' => 'required'
        ]);

        if(!$validated)
        {
            throw new InvalidArgumentException($validated->errors()->fisrt());
        }

        $returnProduct = $request->toArray();

        return $this->returnProductRepository->find($id)->update($returnProduct);
    }

    public function destroy($id)
    {
        return $this->returnProductRepository->destroy($id);
    }
}