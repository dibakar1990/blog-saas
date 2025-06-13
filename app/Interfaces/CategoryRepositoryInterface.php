<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function getCategoryDatatable($data);
    public function getCategory();
    public function store(array $data);
    public function getCategoryByID(string $id);
    public function update(array $data, string $id);
    public function destroy(string $id): bool;
    public function statusUpdate($request): bool;
    public function menuStatusUpdate($request): bool;
    public function categoryOrdering($data): bool;
    public function getCategoryID($slug);
}
