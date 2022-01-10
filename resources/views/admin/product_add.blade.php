@extends('Layouts.admin')
@section('title','product create')
@section('javascript')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @endsection

@section('content')
    <!--inner block start here-->
    <!--<div class="inner-block">
        <div class="blank">
            <h2>Blank Page</h2>
            <div class="blankpage-main">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
    </div>
    inner block end here-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                Product Add
            </h2>
        </div>
        <div class="card-body">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">

                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label >Category Id</label>
                                                <select class="form-control select2" name="category_id" style="width: 100%;">

                                                    @foreach($datalist as $list)
                                                    <option value="{{$list->id}}">{{$list->title}}</option>
                                                        <!--seçilir menüde title gözükür ama seçimde değer olarak
                                                        parent_id si kaydedilir
                                                        -->
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="Description" class="form-control"  >
                                            </div>



                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" name="price" value="0" class="form-control"  >
                                            </div>



                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" class="form-control"  >
                                            </div>

                                            <div class="form-group">
                                                <label>Minquantity</label>
                                                <input type="number" name="minquantity" value="1" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea id="summernote" name="detail"></textarea>
                                                <script>
                                                    $(document).ready(function (){
                                                       $('#summernote').summernote();
                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label>Tax</label>
                                                <input type="number" name="tax" value="15" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Keyword</label>
                                                <input type="text" name="keywords" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">False</option>
                                                    <option>True</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label >Slug</label>
                                                <input type="text" name="slug" class="form-control" id="" >
                                            </div>

                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">

                                            </div>

                                            </div>




                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Create Product</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->




                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->

                            <!--/.col (right) -->
                        </div>
                        <!-- /.row -->
                    <!-- /.container-fluid -->
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <div class="card-footer">

        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('assets')}}/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets')}}/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets')}}/admin/dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
