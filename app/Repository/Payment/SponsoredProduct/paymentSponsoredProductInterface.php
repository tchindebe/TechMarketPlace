<?php


namespace App\Repository\Payment\SponsoredProduct;


use App\Models\Product;

interface paymentSponsoredProductInterface
{
    public function intentSecret(int $amount);
    public function stripe(array $stripeParameter, Product $product);
    public function create_subscription(array $resource, Product $product);
}
