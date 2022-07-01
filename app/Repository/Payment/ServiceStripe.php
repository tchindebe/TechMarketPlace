<?php


namespace App\Repository\Payment;


use App\Models\mediaService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class ServiceStripe
{
    private $privateKey;

    public function __construct()
    {
        $this->privateKey = $_ENV['STRIPE_SECRET'];
    }

    public function paymentIntent($amount)
    {
        Stripe::setApiKey($this->privateKey);

        return PaymentIntent::create([
            'amount' => $amount * 100,
            'currency' => 'eur',
        ]);
    }

    public function payment($amount, $currency, $description, array $stripeParameter)
    {
        Stripe::setApiKey($this->privateKey);

        $payment_intent = null;

        if (isset($stripeParameter['stripeIntentId'])){
            try {
                $payment_intent = PaymentIntent::retrieve($stripeParameter['stripeIntentId']);
            } catch (ApiErrorException $e) {} catch (ApiErrorException $e) {
            }
        }

        if ($stripeParameter['stripeIntentStatus'] === 'succeeded'){
            //TODO
        }else{
            try {
                $payment_intent->cancel();
            } catch (ApiErrorException $e) {}
        }

        return $payment_intent;
    }

    public function stripe(array $stripeParameter, mediaService $media)
    {
        return $this->payment(
            $media->price * 100,
            'eur',
            Auth::user()->username,
            $stripeParameter
        );
    }

}
