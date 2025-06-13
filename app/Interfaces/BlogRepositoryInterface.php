<?php

namespace App\Interfaces;

interface BlogRepositoryInterface
{
    public function getNewsDatatable($data);
    public function getNews():array;
    public function store($data):bool;
    public function findOrFail(string $id);
    public function update($request, string $id):bool;
    public function destroy(string $id): bool;
    public function statusUpdate($request): bool;
    public function getCategoryNews($categoryId);
    public function getAllActiveNews();
}
