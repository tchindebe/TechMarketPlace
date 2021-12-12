@extends('layouts.adminShop')

@section('contents')
    <div>
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins mb-3">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="ibox-title">
                            <h5>Update product<small>please choose beautiful images</small></h5>
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
                            <form method="post" class="form-horizontal" action="{{route('product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" >
                                        @error('name')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror">
                                        @error('slug')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Regular price</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="regular_price" class="form-control @error('regular_price') is-invalid @enderror">
                                        @error('regular_price')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sale price</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror">
                                        @error('sale_price')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Quantity in stock</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror">
                                        @error('quantity')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Short description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="short_description" class="form-control @error('short_description') is-invalid @enderror">
                                        @error('short_description')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control @error('image1') is-invalid @enderror" name="image1">
                                        @error('image1')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2">
                                        @error('image2')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b @error('category') is-invalid @enderror" name="category">
                                            @foreach(Auth::user()->category as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button class="btn btn-primary" type="submit">Add product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
