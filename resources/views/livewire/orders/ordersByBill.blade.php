@extends('layouts.adminShop')

@section('contents')
    <div class="container-fluid mt-10">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row bg-white mt-5" style="background: white; margin-top: 5%; padding: 3%;">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bg-white">
                <div class="white-box">
                    <h3 class="box-title">Orders by number bill : <span style="color: green;">{{$bill}} </span></h3>
                    <h3 class="box-title">Sub total : <span style="color: blue;">{{$subtotal}} Fcfa</span></h3>
                    <div class="table-responsive">
                        <table class="table product-overview">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price Fcfa</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $orders)
                                <tr>
                                    <td><img src="{{asset('storage') . '/' . $orders->image}}" alt="iMac" width="80"></td>
                                    <td>{{$orders->nameProduct}}</td>
                                    <td>{{$orders->price}}</td>
                                    <td>{{$orders->quantity}}</td>
                                    <td>{{ Carbon\Carbon::parse($orders->created_at)->format('Y-M-D-H:i:s') }}</td>
                                    <td>
                                        @if($orders->status == 1)
                                            <span class="label label-success font-weight-100">Paid and delivered</span>
                                        @endif
                                        @if($orders->status == 0)
                                            <span class="label label-danger font-weight-100">Unpaid</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
