<?php

namespace App\Http\Api\Controllers;

use App\Http\Api\DTOs\CategoryDTOs\StoreCategoryDTO;
use App\Http\Api\DTOs\CategoryDTOs\UpdateCategoryDTO;
use App\Http\Api\Requests\CategoryRequests\StoreCategoryRequest;
use App\Http\Api\Requests\CategoryRequests\UpdateCategoryRequest;
use App\Http\Api\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(private readonly CategoryService $categoryService)
    {

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->categoryService->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $storeCategoryRequest)
    {
        $categoryData = new StoreCategoryDTO(... $storeCategoryRequest->validated());
        return $this->categoryService->store($categoryData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $updateCategoryRequest)
    {
        $updateCategory = new UpdateCategoryDTO(... $updateCategoryRequest->validated());
        return $this->categoryService->update($updateCategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return $this->categoryService->delete($id);
    }
}
