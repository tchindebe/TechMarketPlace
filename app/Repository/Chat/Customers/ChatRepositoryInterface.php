<?php

namespace App\Repository\Chat\Customers;


interface ChatRepositoryInterface{
    public function getById(int $id);
    public function store(array $data);
    public function remove(int $id);
}

