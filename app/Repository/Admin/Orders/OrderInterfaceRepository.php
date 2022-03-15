<?php

namespace App\Repository\Admin\Orders;

interface OrderInterfaceRepository{

    public function show();
    public function showByClient(int $id);
    public function showByBill(string $bill);
    public function validateOrderCustomer(string $bill);
}
