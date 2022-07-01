<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\mediaService;
use App\Repository\MediaService\MediaServiceInterface;
use App\Repository\Payment\PaymentStripeInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    private $mediaInterface;
    private $paymentStripeInterface;
    public function __construct(MediaServiceInterface $mediaInterface, PaymentStripeInterface $paymentStripeInterface)
    {
        $this->mediaInterface = $mediaInterface;
        $this->paymentStripeInterface = $paymentStripeInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index($id)
    {
        if (Auth::user()->user_type === "Client"){
            $media = $this->mediaInterface->getById($id);

            $intentSecret =  $this->paymentStripeInterface->intentSecret($media->price);

            return view ('payment.index', compact('media','intentSecret' ));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $media = mediaService::find($request->subscription);

        $resource = $this->paymentStripeInterface->stripe($request->all(), $media);

        if(null !== $resource) {
            $this->paymentStripeInterface->create_subscription($resource, $media);

            $medias = mediaService::all();
            return view('livewire.services.media_video.show', compact('media', 'medias'))->with('success', 'The payment has been made successfully. we thank you for your confidence :)');
        }

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
