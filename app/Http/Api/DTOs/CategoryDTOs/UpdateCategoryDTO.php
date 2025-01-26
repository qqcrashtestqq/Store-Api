<?php
namespace App\Http\Api\DTOs\CategoryDTOs;

class UpdateCategoryDTO
{
    public function __construct(
        public int $id,
        public string $category
    )
    {

    }


    public function toArray(): array
    {
        return  [
            'category' => $this->category
        ];
    }

}
