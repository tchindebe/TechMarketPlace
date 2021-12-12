@extends('layouts.adminShop')

@section('contents')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <a href="{{route('user.product.create')}}" class="btn btn-primary btn-sm float-left">Add new product</a>
                <div class="ibox-title">
                    <h5>Table products for you</h5>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Regular price</th>
                            <th>Sale price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Auth::user()->products as $product)
                            <tr class="gradeX">
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->regular_price}}</td>
                                <td>{{$product->sale_price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td><img alt="image" class="img-responsive" style="width: 50px; height: 40px;" src="{{asset('storage') . '/' . $product->image}}"></td>
                                <td>
                                    <a href="{{route('user.product.update', $product->id)}}" class="btn btn-warning btn-sm " data-toggle="modal">Edit</a>
                                    <div id="modal-form{{$product->id}}" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="b-r"><h3 class="m-t-none m-b">Edit category</h3>
                                                            <p>Edit ths category here</p>
                                                            <form role="form" action="{{route('category.update')}}" method="post">
                                                                @csrf
                                                                <div class="form-group"><label>Name</label> <input type="text" name="name" placeholder="{{$product->name}}" class="form-control"></div>
                                                                <div class="form-group"><label>Slug</label> <input type="text" name="slug" placeholder="{{$product->slug}}" class="form-control"></div>
                                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                                <div>
                                                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Edit this category</strong></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#modal-form{{$product->id}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection

