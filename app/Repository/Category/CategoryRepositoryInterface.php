<?php

namespace App\Repository\Category;

interface CategoryRepositoryInterface
{
    public function create(array $data);
    public function update(array $data);
}