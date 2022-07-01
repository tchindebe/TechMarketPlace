<?php


namespace App\Repository\MediaService;


interface MediaServiceInterface
{
    public function showByServiceUser();
    public function create(array $data);
    public function getById(int $id);
}
