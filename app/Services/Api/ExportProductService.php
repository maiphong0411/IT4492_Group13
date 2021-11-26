<?php

namespace App\Services\Api;

use App\Repositories\ExportProductRepository;
use App\Services\AbstractService;
use http\Env\Request;
use http\Exception\InvalidArgumentException;


class ExportProductService extends AbstractService
{
    protected $exportProductRepository;

    public function __construct(ExportProductRepository $exportProductRepository)
    {
        $this->exportProductRepository = $exportProductRepository;
    }

    public function getAll(){
        return $this->exportProductRepository->getAll();
    }

    public function store($data)
    {
        $validated = $data->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if(!$validated){
            throw new InvalidArgumentException($validated->errors()->first());
        }
        $userRequest = $data->toArray();

        return $this->exportProductRepository->store($userRequest);
    }

    public function update($request, $id)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        if(!$validated)
        {
            throw new InvalidArgumentException($validated->errors()->fisrt());
        }

        $exportProduct = $request->toArray();

        return $this->exportProductRepository->find($id)->update($exportProduct);
    }

}