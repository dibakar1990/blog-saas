<?php

namespace App\Interfaces;

interface BlogRepositoryInterface
{
    public function getNewsDatatable($data);
    public function getNews();
    public function headNews();
    public function store($data):bool;
    public function findOrFail(string $id);
    public function update($request, string $id):bool;
    public function destroy(string $id): bool;
    public function statusUpdate($request): bool;
    public function getCategoryNews($categoryId);
    public function getAllActiveNews();
    public function getBlogID($tagID);
    public function getTagBlog($blogIds);
    public function getBlogSlug($slug);
    public function getCatBlogs();
    public function latestNews();
    public function topNews();
}
