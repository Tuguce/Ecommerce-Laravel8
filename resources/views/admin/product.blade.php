@extends('Layouts.admin')
@section('title','product list')

@section('content')
    <!--

    <div class="inner-block">
        <div class="blank">
            <h2>Category List</h2>
            <div class="blankpage-main"> -->>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    -->
          <!--
                /*foreach ($categorylist as $category)
                    <p>{$category->title }}</p>
                endforeach
            </div>
        </div>
    </div>
    -->
    <!--inner block end here-->
    <!--***************************************************************  -->
    <!--<div class="chit-chat-layer1">-->
    <!-- Content Wrapper. Contains page content -->
    <br>
    <br>
    <br>
    </br>
    <br>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product List</h3>
                        </div>


    <div class="card">
        <div class="card-header">

        </div>
        <!-- card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>Id</th>
                    <th>Category</th>
                    <th>Titles</th>
                    <th>Quantity</th>
                    <th>Price</th>

                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($productlist as $pr)
                <tr>
                    <td>{{$pr->id }}</td>
                    <td>{{$pr->category_id }}
                    </td>
                    <td>{{$pr->title }}</td>
                    <td> {{$pr->quantity }}</td>
                    <td>{{$pr->price}}</td>
                    <td>{{$pr->status}}</td>

                    <td><a href="{{route('admin_product_edit',['id'=>$pr->id])}}">edit</a></td>
                    <td><a href="{{route('admin_product_delete',['id'=>$pr->id])}}" onclick="return confirm('Delete ! are you sure?')">
                            delete</a></td>


                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Titles</th>
                    <th>Quantity</th>
                    <th>Price</th>

                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets')}}/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets')}}/admin/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>



@endsection
