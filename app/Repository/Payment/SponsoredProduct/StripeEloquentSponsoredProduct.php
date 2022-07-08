<?php


namespace App\Repository\Payment\SponsoredProduct;


use App\Models\Product;
use App\Models\productSponsored;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;

class StripeEloquentSponsoredProduct implements paymentSponsoredProductInterface
{
    private $serviceStripe;
    public function __construct(ServiceStripeSponsoredProduct $serviceStripe)
    {
        $this->serviceStripe = $serviceStripe;
    }

    public function create_subscription(array $resource, Product $product)
    {
        $payment = new productSponsored();

        $payment->create([
            "user_id" => Auth::user()->id,
            "name" => Auth::user()->username,
            "product_id" => $product->id,
            "transaction_type" => $resource['stripeBrand'],
            "prise" => (int)($product->sale_prise*5/100),
        ]);

        $product->update([
            'sponsored' => 1
        ]);
    }

    public function intentSecret(int $amount)
    {
        try {
            $intent = $this->serviceStripe->paymentIntent($amount);

            return $intent['client_secret'];

        } catch (ApiErrorException $e) {}
    }

    public function stripe(array $stripeParameter, Product $product)
    {
        $resource = null;
        $data = $this->serviceStripe->stripe($stripeParameter, $product);

        if($data) {
            $resource = [
                'stripeBrand' => $data['charges']['data'][0]['payment_method_details']['card']['brand'],
                'stripeLast4' => $data['charges']['data'][0]['payment_method_details']['card']['last4'],
                'type' => $data['charges']['data'][0]['payment_method_details']['type'],
                'stripeId' => $data['charges']['data'][0]['id'],
                'stripeStatus' => $data['charges']['data'][0]['status'],
                'stripeToken' => $data['client_secret'],
                'amount' => $product->sale_price*5/100
            ];
        }

        return $resource;
    }
}
