@extends('Layouts.admin')
@section('title','category edit')

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
                Category Edit
            </h2>
        </div>
        <div class="card-body">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">

                        </div>
                    </div><!-- /.container-fluid -->
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
                                    <form role="form" action="{{route('admin_category_update',['id'=>$ct->id])}}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label >Parent_id</label>
                                                <select class="form-control select2" name="parent_id" style="width: 100%;">

                                                    <option value="0" >Main Category</option>
                                                    @foreach($cl as $list)
                                                    <option value="{{$list->id}}" @if($list->id==$ct->parent_id) selected="selected"@endif
                                                    >{{$list->title}}</option>
                                                        <!--seçilir menüde title gözükür ama seçimde değer olarak
                                                        parent_id si kaydedilir
                                                        -->
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$ct->title}}" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="Description" value="{{$ct->description}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label>Keyword</label>
                                                <input type="text" name="keywords" value="{{$ct->keywords}}" class="form-control" id="" >
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">{{$ct->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label >Slug</label>
                                                <input type="text" name="slug" value="{{$ct->slug}}" class="form-control" id="" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">İmage</label>
                                                <div class="input-group">
                                                    <div class="custom-file" >
                                                        <input type="file" name="image" value="{{$ct->image}}" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="">Upload</span>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Category</button>
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
                    </div><!-- /.container-fluid -->
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
