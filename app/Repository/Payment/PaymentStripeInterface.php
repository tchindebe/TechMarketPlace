<?php


namespace App\Repository\Payment;


use App\Models\mediaService;

interface PaymentStripeInterface
{
    public function intentSecret(int $amount);
    public function stripe(array $stripeParameter, mediaService $media);
    public function create_subscription(array $resource, mediaService $media);
}
