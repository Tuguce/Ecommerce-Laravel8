@extends('Layouts.admin')
@section('title','product edit')

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
                Product Edit</h2>
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
                                    <form role="form" action="{{route('admin_product_update',['id'=>$ct->id])}}" method="post">
                                        @csrf

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label >Category</label>
                                                <select class="form-control select2" name="category_id" style="width: 100%;">

                                                    @foreach($cl as $list)
                                                        <option value="{{$list->id}}" @if($list->id==$ct->parent_id) selected="selected"@endif
                                                        >{{$list->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="title" name="title" class="form-control" value="{{$ct->title}}"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="Description" class="form-control" value="{{$ct->description}}"  >
                                            </div>



                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" name="price" value="{{$ct->price}}" class="form-control"  >
                                            </div>



                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" class="form-control" value="{{$ct->quantity}}" >
                                            </div>

                                            <div class="form-group">
                                                <label>Minquantity</label>
                                                <input type="number" name="minquantity" value="{{$ct->minquantity}}" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label >Detail</label>
                                                <textarea id="detail" name="detail" >{{$ct->detail}}</textarea>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#detail').summernote();
                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label>Tax</label>
                                                <input type="number" name="tax" value="{{$ct->tax}}" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label>Keyword</label>
                                                <input type="text" name="keywords" class="form-control" value="{{$ct->keywords}}"  >
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
                                                <input type="text" name="slug" class="form-control" id="" value="{{$ct->slug}}" >
                                            </div>

                                            </div>





                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary"> Update Product</button>
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
