<?php

namespace App\Repository\Category;

interface CartRepositoryInterface
{
    public function cartList();

    public function addToCart(array $data);

    public function updateCart(array $data);

    public function removeCart($id);

    public function clearAllCart($id);
}
