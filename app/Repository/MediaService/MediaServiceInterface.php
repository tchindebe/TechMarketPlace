<?php


namespace App\Repository\MediaService;


interface MediaServiceInterface
{
    public function showByServiceUser(int $id);
    public function create(array $data);
}
