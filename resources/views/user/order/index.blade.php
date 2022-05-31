@extends('layouts.adminShop')

@section('contents')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <!--row -->
    <div class="row container-fluid" style="margin: 2%;">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background: white;">
            <div class="white-box" style="margin-top: 4%!important;">
                <h3 class="box-title">Your orders</h3>
                <div class="table-responsive">
                    <table class="table product-overview">
                        <thead>
                        <tr>
                            <th>Bill Number</th>
                            <th>Customer</th>
                            <th>Sub total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $orders)
                            <tr>
                                <td>
                                    <a href="{{route('livewire.bill', [$orders->billNumber, $orders->subtotal])}}">
                                        {{$orders->billNumber}}
                                    </a>
                                </td>
                                <td>{{$orders->lastName}}</td>
                                <td>{{$orders->subtotal}}</td>
                                <td>
                                    @if($orders->status == 1)
                                        <span class="label label-success font-weight-100">Paid and delivered</span>
                                    @endif
                                    @if($orders->status == 0)
                                        <span class="label label-danger font-weight-100">Unpaid</span>
                                    @endif
                                </td>
                                <td>
                                    @if($orders->status == 0)
                                        <a href="{{route('livewire.validateOrdersCustumer', $orders->billNumber)}}" class="text-inverse p-r-10" data-toggle="tooltip" title="Validate order">
                                            <i class="ti-marker-alt"></i>
                                        </a>
                                    @endif
                                    <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip">
                                        <i class="ti-trash" style="color: red;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
