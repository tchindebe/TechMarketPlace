<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repository\Payment\SponsoredProduct\paymentSponsoredProductInterface;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentSponsoredProductController extends Controller
{
    private $productInterface;
    private $paymentSponsoredStripeInterface;
    public function __construct(ProductRepositoryInterface $productInterface, paymentSponsoredProductInterface $paymentSponsoredStripeInterface)
    {
        $this->productInterface = $productInterface;
        $this->paymentSponsoredStripeInterface = $paymentSponsoredStripeInterface;
    }
    public function index($id)
    {
        if (Auth::user()->user_type === "Boutique"){
            $product = $this->productInterface->getById($id);
            $amount = ceil(($product->sale_price*5/100/656));

            $intentSecret =  $this->paymentSponsoredStripeInterface->intentSecret((int)($amount));

            return view ('payment.sponsored.index', compact('product','intentSecret' ));
        }

        return redirect()->back();
    }

    public function store(Request $request){
        $product = Product::find($request->subscription);

        $resource = $this->paymentSponsoredStripeInterface->stripe($request->all(), $product);

        if(null !== $resource) {
            $this->paymentSponsoredStripeInterface->create_subscription($resource, $product);

            return redirect()->route('user.product.index')->with('success', 'The payment has been made successfully. The product will be sponsored for 2 days. We thank you for your confidence :)');
        }

        return redirect()->back();
    }
}
