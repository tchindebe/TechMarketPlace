<?php


namespace App\Repository\Payment;


use App\Models\mediaService;
use App\Models\Subcription_stripe;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;

class StripeEloquent implements PaymentStripeInterface
{
    private $serviceStripe;
    public function __construct(ServiceStripe $serviceStripe)
    {
        $this->serviceStripe = $serviceStripe;
    }

    public function create_subscription(array $resource, mediaService $media)
    {
        $payment = new Subcription_stripe();

        $payment->create([
            "user_id" => Auth::user()->id,
            "name" => Auth::user()->username,
            "stripe_status" => $resource['stripeStatus'],
            "transaction_type" => $resource['stripeBrand'],
            "quantity" => 1,
            "article_id" => $media->id,
            "type" => $resource['stripeBrand'],
        ]);
    }

    public function intentSecret(int $amount)
    {
        try {
            $intent = $this->serviceStripe->paymentIntent($amount);

            return $intent['client_secret'];

        } catch (ApiErrorException $e) {}
    }

    public function stripe(array $stripeParameter, mediaService $media)
    {
        $resource = null;
        $data = $this->serviceStripe->stripe($stripeParameter, $media);

        if($data) {
            $resource = [
                'stripeBrand' => $data['charges']['data'][0]['payment_method_details']['card']['brand'],
                'stripeLast4' => $data['charges']['data'][0]['payment_method_details']['card']['last4'],
                'type' => $data['charges']['data'][0]['payment_method_details']['type'],
                'stripeId' => $data['charges']['data'][0]['id'],
                'stripeStatus' => $data['charges']['data'][0]['status'],
                'stripeToken' => $data['client_secret'],
                'amount' => $media->price
            ];
        }

        return $resource;
    }

}
