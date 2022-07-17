@extends('layouts.adminShop')

@section('contents')
    <div class="row">
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
            @endif
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Add category</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form role="form" class="form-inline" action="{{route('Category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            @error('name')
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" placeholder="Enter Name category" name="name" id="exampleInputEmail2" class="form-control @error('name') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            @error('slug')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" placeholder="Enter slug category" name="slug" id="exampleInputPassword2" class="form-control @error('slug') is-invalid @enderror">
                        </div>
                        <button class="btn btn-primary" type="submit">Add category</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Information <small>This slug is very important</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List of all your Categories <span class="tet-green-600">({{Auth::user()->category->count()}})</span></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-9 m-b-xs">
                                <div data-toggle="buttons" class="btn-group">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                                </span></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name category</th>
                                    <th>Slug Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Auth::user()->category as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <a href="#modal-form{{$category->id}}" class="btn btn-warning btn-sm " data-toggle="modal">Edit</a>
                                            <div id="modal-form{{$category->id}}" class="modal fade" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="b-r"><h3 class="m-t-none m-b">Edit category</h3>
                                                                    <p>Edit ths category here</p>
                                                                    <form role="form" action="{{route('category.update')}}" method="post">
                                                                        @csrf
                                                                        <div class="form-group"><label>Name</label> <input type="text" name="name" placeholder="{{$category->name}}" class="form-control"></div>
                                                                        <div class="form-group"><label>Slug</label> <input type="text" name="slug" placeholder="{{$category->slug}}" class="form-control"></div>
                                                                        <input type="hidden" value="{{$category->id}}" name="id">
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
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
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
