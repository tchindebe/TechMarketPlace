<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repository\Payment\SponsoredProduct\paymentSponsoredProductInterface;
use App\Repository\Payment\User\PaymentShopInterface;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentShopController extends Controller
{
    private $paymentShop;
    public function __construct(PaymentShopInterface $paymentShop)
    {
        $this->paymentShop = $paymentShop;
    }
    public function index()
    {
        if (Auth::user()->user_type === "Boutique"){

            $amount = ceil((5000/656));

            $intentSecret =  $this->paymentShop->intentSecret((int)($amount));

            return view ('payment.shop.index', compact('amount','intentSecret' ));
        }

        return redirect()->back();
    }

    public function store(Request $request){

        $resource = $this->paymentShop->stripe($request->all(), 5000);

        if(null !== $resource) {
            $this->paymentShop->create_subscription($resource, 5000);

            return redirect()->route('user.dashboard')->with('success', 'The payment has been made successfully.)');
        }

        return redirect()->back();
    }
}
