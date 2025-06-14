<?php

namespace App\Interfaces;

interface TagRepositoryInterface
{
    public function getTagDatatable($data);
    public function getTag();
    public function store(array $data);
    public function getFindOrFail(string $id);
    public function update($data, string $id):bool;
    public function status($data):bool;
    public function destroy(string $id):bool;
    public function getTagId($slug);
}
