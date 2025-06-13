<?php

namespace App\Services\Blog;

use App\Interfaces\CategoryRepositoryInterface;

class CategoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private CategoryRepositoryInterface $categoryRepository
    ){ }
    
    public function getDatatable($request)
    {
        return $this->categoryRepository->getCategoryDatatable($request);
    }

    public function getAllCategory()
    {
        return $this->categoryRepository->getCategory();
    }

    public function storeCategory($data)
    {
        return $this->categoryRepository->store($data);
    }

    public function categoryByID(string $id)
    {
        return $this->categoryRepository->getCategoryByID($id);
    }

    public function updateCategory($data, string $id)
    {
        return $this->categoryRepository->update($data, $id);
    }

    public function categoryDelete(string $id)
    {
        return $this->categoryRepository->destroy($id);
    }

    public function categoryStatusCahnge($request)
    {
        return $this->categoryRepository->statusUpdate($request);
    }

    public function categoryMenuStatusCahnge($request)
    {
        return $this->categoryRepository->menuStatusUpdate($request);
    }

    public function getCategoryOrdering($data)
    {
        return $this->categoryRepository->categoryOrdering($data);
    }

    public function getSlugWiseCategoryId($slug)
    {
        return $this->categoryRepository->getCategoryID($slug);
    }

    
}
