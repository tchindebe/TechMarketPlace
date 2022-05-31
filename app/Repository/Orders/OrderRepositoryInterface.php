<?php

namespace App\Repository\Orders;

interface OrderRepositoryInterface
{
    public function getById(int $id);
    public function store(array $data);
    public function show();
    public function orderByProgress();
    public function orderByUnpaid();
    public function getOrderByShop(string $username);
}
