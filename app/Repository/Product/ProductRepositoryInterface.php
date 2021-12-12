<?php

namespace App\Repository\Product;

interface ProductRepositoryInterface
{
    public function create(array $data);

    public function update(array $data);

    public function getById(int $id);

    public function delete(int $id);
}
