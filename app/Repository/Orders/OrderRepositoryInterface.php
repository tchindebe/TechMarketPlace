<?php

namespace App\Repository\Orders;

interface OrderRepositoryInterface
{
    public function getById(int $id);
}
