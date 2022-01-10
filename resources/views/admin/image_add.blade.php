<html>
<head>
    <title>Image Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{asset('assets')}}/admin/js/jquery-2.1.1.min.js"></script>
    <!--icons-css-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="{{asset('assets')}}/admin/js/Chart.min.js"></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <script src="{{asset('assets')}}lib/html5shiv/html5shiv.js"></script>
    <!-- Chartinator  -->
    <script src="{{asset('assets')}}/admin/js/chartinator.js" ></script>
</head>
<body>
<br>
<br>
<br>


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">{{$data->title}}</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form" action="{{route('admin_image_store',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"  >
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
                                            <button type="submit" class="btn btn-primary">Create İmage</button>
                                        </div>
                                    </form>

                                    <!-- /.card-body -->

                                   
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>

                                            <th>Id</th>

                                            <th>Titles</th>
                                            <th>Image Gallery</th>

                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($images as $pr)
                                            <tr>
                                                <td>{{$pr->id }}</td>

                                                <td>{{$pr->title }}</td>

                                                <td>
                                                    @if ($pr->image)
                                                        <img src="{{Storage::url(($pr->image))}}" height="60" alt="">
                                                    @endif
                                                </td>

                                                <td><a href="{{route('admin_image_delete',['id'=>$pr->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete ! are you sure?')">
                                                        delete</a></td>


                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>

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



</body>
</html>

