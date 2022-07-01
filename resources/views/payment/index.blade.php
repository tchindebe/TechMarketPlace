@extends('layouts.base')

@section('content')
    @if(Auth::User()->user_type =="Client")
        <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
        <link href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <style>
            /**
             * The CSS shown here will not be introduced in the Quickstart guide, but shows
             * how you can use CSS to style your Element's container.
             */
            .StripeElement {
                box-sizing: border-box;
                height: 40px;
                width: 100%;
                padding: 10px 12px;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: white;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }

            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }

            .StripeElement--invalid {
                border-color: #0A9B01;
            }

            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
            }
        </style>

        <section class="features-icons bg-light h-100">
            <div class="container">
                <div class="row">
                    <div style="width: 100%;">
                        <div class="card-body" style="margin-top: 7%;">
                            <form action="{{ route('payment.store') }}" method="post" id="payment-form">
                                @csrf
                                <div class="row flex">
                                    <div class="form-row">
                                        <div id="card-elements"></div>

                                        <script src="https://js.stripe.com/v3/"></script>

                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <button class="text-white ml-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm w-full sm:w-auto mt-3 px-2 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Valid payment {{ $media->price }} €
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
@endsection
@section('javascript')
    <script>

        var stripeToken = "{{ env('STRIPE_KEY') }}";

        var stripe = Stripe(stripeToken);
        var elements = stripe.elements();
        var subscription = "{{ $media->id }}";
        var clientSecret = "{{ $intentSecret }}";
        var cardholderName = "{{ Auth::user()->username }}";
        var cardholderEmail = "{{ Auth::user()->email }}";

        var styleCustom = {
            base: {
                fontSize: '16px',
                color: '#25332d'
            }
        }

        // Monter notre form a l'objet Stripe
        var card = elements.create('card', {style: styleCustom });
        card.mount("#card-elements");

        //Message Error
        card.addEventListener('change', function(event){
            var displayError = document.getElementById('card-errors');

            if(event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.handleCardPayment(
                clientSecret,
                card,
                {
                    payment_method_data: {
                        billing_details: {
                            name: cardholderName,
                            email: cardholderEmail
                        }
                    }
                }
            ).then((result) => {
                if(result.error) {
                    // Display error
                } else if('paymentIntent' in result) {
                    console.log('Result : ',result);
                    stripeTokenHandler(result.paymentIntent);
                    console.log('Result paymentIntent : ',result.paymentIntent);
                }
            })
        });

        function stripeTokenHandler(intent) {
            var form = document.getElementById('payment-form');
            var InputIntentId = document.createElement('input');
            var InputIntentPaymentMethod = document.createElement('input');
            var InputIntentStatus = document.createElement('input');
            var InputSubscription = document.createElement('input');

            InputIntentId.setAttribute('type', 'hidden');
            InputIntentId.setAttribute('name', 'stripeIntentId');
            InputIntentId.setAttribute('value', intent.id);

            InputIntentPaymentMethod.setAttribute('type', 'hidden');
            InputIntentPaymentMethod.setAttribute('name', 'stripeIntentPaymentMethod');
            InputIntentPaymentMethod.setAttribute('value', intent.payment_method);

            InputIntentStatus.setAttribute('type', 'hidden');
            InputIntentStatus.setAttribute('name', 'stripeIntentStatus');
            InputIntentStatus.setAttribute('value', intent.status);

            InputSubscription.setAttribute('type', 'hidden');
            InputSubscription.setAttribute('name', 'subscription');
            InputSubscription.setAttribute('value', subscription);

            form.appendChild(InputIntentId);
            form.appendChild(InputIntentPaymentMethod);
            form.appendChild(InputIntentStatus);
            form.appendChild(InputSubscription);
            form.submit();
        }
    </script>
    @endif

@endsection
