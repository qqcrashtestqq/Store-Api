<?php
namespace App\Http\Api\DTOs\CategoryDTOs;

class StoreCategoryDTO
{
    public function __construct(
        public string $category,
    )
    {

    }

    public function toArray(): array
    {
        return
            [
                'category' => $this->category,
            ];
    }

}
