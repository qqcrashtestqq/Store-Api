<?php

namespace App\Http\Api\Services;

use App\Http\Api\DTOs\ProductDTOs\StoreProductDTO;
use App\Models\Product;

class ProductService
{

    public function all()
    {
        return Product::select(
            'title',
            'price',
            'review',
            'description',
            'size',
            'category_id',
            'weight',
            'diameter',
            'color',
            'material')
            ->with('category:id,title')
            ->get();
    }

    public function store(StoreProductDTO $storeProductDTO)
    {
        return Product::create($storeProductDTO->toArray());
    }


    public function delete(int $id)
    {
        return Product::destroy($id);
    }
}
