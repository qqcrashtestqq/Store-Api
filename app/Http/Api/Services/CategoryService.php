<?php
namespace App\Http\Api\Services;

use App\Http\Api\DTOs\CategoryDTOs\StoreCategoryDTO;
use App\Http\Api\DTOs\CategoryDTOs\UpdateCategoryDTO;
use App\Models\Category;

class CategoryService {


    public function all()
    {
        return Category::get('category');
    }


    public function update(UpdateCategoryDTO $updateCategoryDTO)
    {
        $updateCategoryData = Category::findOrFail($updateCategoryDTO->id);
        $updateCategoryData->update($updateCategoryDTO->toArray());
        return $updateCategoryData;
    }

    public function store(StoreCategoryDTO $storeCategoryDTO)
    {
        return Category::create($storeCategoryDTO->toArray());
    }



    public function delete(int $id)
    {
        return Category::destroy($id);
    }
}
