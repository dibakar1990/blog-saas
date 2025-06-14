<?php

namespace App\Services\Blog;

use App\Interfaces\TagRepositoryInterface;

class TagService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private TagRepositoryInterface $tagRepository
    ){ }

    public function getDatatable($request)
    {
        return $this->tagRepository->getTagDatatable($request);
    }

    public function getAllTags()
    {
        return $this->tagRepository->getTag();
    }


    public function storeTag($data)
    {
        return $this->tagRepository->store($data);
    }

    public function getTagByID(string $id)
    {
        return $this->tagRepository->getFindOrFail($id);
    }

    public function updateTag($request, string $id)
    {
        return $this->tagRepository->update($request,$id);
    }

    public function deleteTag(string $id)
    {
        return $this->tagRepository->destroy($id);
    }

    public function statusChange($request)
    {
        return $this->tagRepository->status($request);
    }

    public function getTagID($slug)
    {
        return $this->tagRepository->getTagId($slug);
    }
}
