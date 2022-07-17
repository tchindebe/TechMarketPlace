@extends('layouts.base')

@section('content')
    <div class="container justify-content-center text-center bg-secondary text-white p-5 rounded-md">
        <p class="">
            Your account is suspended because your payment for this month has not been made
            <br>
            during this time none of your products are visible on the platform. <br>
            or contact the administration at <span class="text-success">+237 650 08 94 30</span><br>
            <a href="{{route('payment.shop.spending')}}" class="btn btn-primary mt-3">Buy now</a>
        </p>
    </div>
@endsection
