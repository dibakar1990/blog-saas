<?php

namespace App\Services\Blog;

use App\Interfaces\BlogRepositoryInterface;

class BlogService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private BlogRepositoryInterface $blogRepository
    ){}

    public function getDatatable($request)
    {
        return $this->blogRepository->getNewsDatatable($request);
    }
    
    public function getAllNews()
    {
        return $this->blogRepository->getNews();
    }

    public function newsStore($request)
    {
        return $this->blogRepository->store($request);
    }

    public function getNewsByID(string $id)
    {
        return $this->blogRepository->findOrFail($id);
    }

    public function newsUpdate($request, string $id)
    {
        return $this->blogRepository->update($request, $id);
    }

    public function newsDelete(string $id)
    {
        return $this->blogRepository->destroy($id);
    }

    public function newsStatusCahnge($request)
    {
        return $this->blogRepository->statusUpdate($request);
    }

    public function categoryWiseNews($categoryId)
    {
        return $this->blogRepository->getCategoryNews($categoryId);
    }

    public function getActiveNews()
    {
        return $this->blogRepository->getAllActiveNews();
    }
}
