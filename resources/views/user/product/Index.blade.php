@extends('layouts.adminShop')

@section('contents')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-lg-12">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="ibox float-e-margins">
                <a href="{{route('user.product.create')}}" class="btn btn-primary btn-sm float-left">Add new product</a>
                <div class="ibox-title">
                    <h5>Table products for you, you have <strong style="color: green;">{{Auth::user()->products->count()}}</strong> Product(s)</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Regular price</th>
                            <th>Sale price</th>
                            <th>Stock</th>
                            <th>Quality</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Auth::user()->products as $product)
                            <tr class="gradeX">
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->regular_price}}</td>
                                <td>{{$product->sale_price}}</td>
                                <td @if($product->quantity > 10) style="color:green; font-weight: bold;" @else style="color:red; font-weight: bold;"@endif>{{$product->quantity}}</td>
                                <td>
                                    @if($product->SKU == 1)
                                        Featured product
                                    @elseif($product->SKU == 2)
                                        Product in promotion
                                    @elseif($product->SKU == 3)
                                        Low price product
                                    @else
                                        Others
                                    @endif
                                </td>
                                <td><img alt="image" class="img-responsive" style="width: 50px; height: 40px;" src="{{asset('storage') . '/' . $product->image}}"></td>
                                <td>
                                    <a href="{{route('user.product.update', $product->id)}}" class="btn btn-warning btn-sm " data-toggle="modal">Edit</a>
                                    <a href="#modal-form{{$product->id}}" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a>
                                    <div id="modal-form{{$product->id}}" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row mb-5">
                                                        <div class="b-r"><h3 class="m-t-none m-b">Edit category</h3>
                                                            <p>Delete this category here</p>
                                                            <p>You want to delete product : {{$product->name}}</p>
                                                            <img alt="image" class="img-responsive mb-5" style="width: 110px; height: 100px;" src="{{asset('storage') . '/' . $product->image}}">
                                                        </div>
                                                    </div>
                                                    <a href="{{route('product/delete', $product->id)}}" class="btn btn-danger mt-5">Delete this product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection

