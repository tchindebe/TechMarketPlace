<?php


namespace App\Repository\Payment\User;

interface PaymentShopInterface
{
    public function intentSecret(int $amount);
    public function stripe(array $stripeParameter, int $amount);
    public function create_subscription(array $resource, int $amount);
}
