<?php

namespace App\Interfaces;

interface SocialRepositoryInterface
{
    public function getSocialDatatable($data);
    public function getSocial();
    public function store(array $data);
    public function getDataByID(string $id);
    public function update(array $data, string $id);
    public function destroy(string $id): bool;
    public function statusUpdate($request): bool;
    public function ordering($data): bool;
}