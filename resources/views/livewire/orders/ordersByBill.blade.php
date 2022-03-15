@extends('layouts.adminShop')

@section('contents')
    <div class="container-fluid mt-10">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Your orders by number bill : <span style="color: green;">{{$bill}} </span></h3>
                    <h3 class="box-title">Sub total : <span style="color: blue;">{{$subtotal}} Fcfa</span></h3>
                    <div class="table-responsive">
                        <table class="table product-overview">
                            <thead>
                            <tr>
                                <th>Shop</th>
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
                                    <td><a href="{{route('user.shop', $orders->shop)}}" target="_blank">{{$orders->shop}}</a></td>
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
                        @if($orders->status == 0)
                            <a href="{{route('livewire.validateOrdersCustumer', $bill)}}" style="color: white;" class="text-inverse p-r-10 btn btn-success btn-sm" data-toggle="tooltip" title="Validate order">
                                <i class="ti-marker-alt" style="color: white;"> Aprouve this order</i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
