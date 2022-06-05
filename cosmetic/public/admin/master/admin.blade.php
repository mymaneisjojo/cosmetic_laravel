<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin-ELIAH</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('public/admin')}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('public/admin')}}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('public/admin')}}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('public/admin')}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">

    <!-- DataTables CSS -->
    <link
        href="{{url('public/admin')}}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
        rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{url('public/admin')}}/bower_components/datatables-responsive/css/dataTables.responsive.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/assets')}}/summernote/summernote.min.css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin- ELIAH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @if(Auth::check())
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}</a>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                </li>
                <li class="divider"></li>


                <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    @endif
                </li>
            </ul>
            <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('category.index')}}">List Category</a>
                                </li>
                                <li>
                                    <a href="{{route('category.create')}}">Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('product.index')}}">List Product</a>
                                </li>
                                <li>
                                    <a href="{{route('product.create')}}">Add Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Color<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('color.index')}}">List Color</a>
                                </li>
                                <li>
                                    <a href="{{route('color.create')}}">Add Color</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('user.index')}}">List User</a>
                                </li>
                                <li>
                                    <a href="{{route('user.create')}}">Add User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('customer.index')}}"><i class="fa fa-list-alt fa-fw"></i> Customer<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('customer.index')}}">List Cus</a>
                                </li>
                                <li>
                                    <a href="{{route('customer.create')}}">Add Cus</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            @if (Session::has('yes'))
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">☒</button>
                    {{Session::get('yes')}}
                </div>
                @endif
                @if (Session::has('no'))
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">☒</button>
                        {{Session::get('no')}}
                    </div>
                    @endif
                    @yield('main')
                    <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>Tin Tức</td>
                                <td>None</td>
                                <td>Hiện</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Bóng Đá</td>
                                <td>Thể Thao</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div> -->
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="{{url('public/admin')}}/bower_components/jquery/dist/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{url('public/admin')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="{{url('public/admin')}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="{{url('public/admin')}}/dist/js/sb-admin-2.js"></script>

            <!-- DataTables JavaScript -->
            <script src="{{url('public/admin')}}/bower_components/DataTables/media/js/jquery.dataTables.min.js">
            </script>
            <script
                src="{{url('public/admin')}}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js">
            </script>
            <script src="{{url('public/assets')}}/summernote/summernote.min.js"></script>


            <!-- Page-Level Demo Scripts - Tables - Use for reference -->
            <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
            </script>
</body>

</html>