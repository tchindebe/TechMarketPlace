@extends('layouts.adminShop')

@section('contents')
    <div class="row">
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
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
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Basic Data Tables example with responsive plugin</h5>
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
                                <th>Name category</th>
                                <th>Slug Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->category as $category)
                                <tr class="gradeX">
                                    <td>{{$category->id}}</td>
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
    <!-- Mainly scripts -->
    <script src="{{asset('assets/shop/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('assets/shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/jeditable/jquery.jeditable.js')}}"></script>

    <!-- Data Tables -->
    <script src="{{asset('assets/shop/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/dataTables/dataTables.responsive.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('assets/shop/js/inspinia.js')}}"></script>
    <script src="{{asset('assets/shop/js/plugins/pace/pace.min.js')}}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },
                "width": "90%",
                "height": "100%"
            } );
        });
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );
        }
    </script>

@endsection
