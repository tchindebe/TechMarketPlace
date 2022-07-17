<?php


namespace App\Repository\Payment\User;


use App\Models\Product;
use App\Models\productSponsored;
use App\Models\subcriptionShop;
use App\Repository\Payment\SponsoredProduct\ServiceStripeSponsoredProduct;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;

class StripeEloquentShop implements PaymentShopInterface
{
    private $serviceStripe;
    public function __construct(ServiceStripeShop $serviceStripe)
    {
        $this->serviceStripe = $serviceStripe;
    }

    public function create_subscription(array $resource, $amount)
    {
        $payment = new subcriptionShop();

        $payment->create([
            "user_id" => Auth::user()->id,
            "name" => Auth::user()->username,
            "transaction_type" => $resource['stripeBrand'],
            "stripe_status" => $resource['stripeBrand'],
            "prise" => $amount
        ]);

        Auth::user()->update([
            'account_status' => 'Approved'
        ]);
    }

    public function intentSecret(int $amount)
    {
        try {
            $intent = $this->serviceStripe->paymentIntent($amount);

            return $intent['client_secret'];

        } catch (ApiErrorException $e) {}
    }

    public function stripe(array $stripeParameter, $amount)
    {
        $resource = null;
        $data = $this->serviceStripe->stripe($stripeParameter, $amount);

        if($data) {
            $resource = [
                'stripeBrand' => $data['charges']['data'][0]['payment_method_details']['card']['brand'],
                'stripeLast4' => $data['charges']['data'][0]['payment_method_details']['card']['last4'],
                'type' => $data['charges']['data'][0]['payment_method_details']['type'],
                'stripeId' => $data['charges']['data'][0]['id'],
                'stripeStatus' => $data['charges']['data'][0]['status'],
                'stripeToken' => $data['client_secret'],
                'amount' => $amount
            ];
        }

        return $resource;
    }
}
