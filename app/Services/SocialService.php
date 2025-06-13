<?php

namespace App\Services;

use App\Interfaces\SocialRepositoryInterface;

class SocialService
{
    public function __construct(
        private SocialRepositoryInterface $socialRepository
    ){ }
    
    public function getDatatable($request)
    {
        return $this->socialRepository->getSocialDatatable($request);
    }

    public function getAllSocial()
    {
        return $this->socialRepository->getSocial();
    }

    public function storeSoical($data)
    {
        return $this->socialRepository->store($data);
    }

    public function socialByID(string $id)
    {
        return $this->socialRepository->getDataByID($id);
    }

    public function updateSocial($data, string $id)
    {
        return $this->socialRepository->update($data, $id);
    }

    public function socialDelete(string $id)
    {
        return $this->socialRepository->destroy($id);
    }

    public function socialStatusChange($request)
    {
        return $this->socialRepository->statusUpdate($request);
    }

    public function getsocialOrdering($data)
    {
        return $this->socialRepository->ordering($data);
    }
}
