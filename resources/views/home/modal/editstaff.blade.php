<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.min.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="css/chart.css">
    <link rel="stylesheet" href="css/txt.css">
    <title>Far East Cafe</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('home.components.header');
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar " style="background-color: #463426;>
            <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <p style="color:white;"> Menu </p>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('admindashboard')}}"  style="display: flex; align-items: center;"><i class="fa fa-fw fa-user-circle"
                                style="color:white"></i>
                            <p style="color:white;">Dashboard</p>
                        </a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-shopping-cart"
                                    style="color:white"></i>
                                <p style="color:white;">Transaction</p>
                            </a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false"
                                data-target="#submenu-6"><i class="fas fa-fw fa-table" style="color:white"></i>
                                <p style="color:white;">DTR</p>
                            </a>
                            <div id="submenu-6" class="collapse submenu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-7" aria-controls="submenu-7"><img
                                    src="home/assets/images/dollar-white.png" width="17" height="17">
                                <p style="color:white; text-indent: 10px; ">Payroll</p>
                            </a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-8" aria-controls="submenu-5"><img
                                    src="home/assets/images/other-white.png" width="17" height="17">
                                <p style="color:white; text-indent: 10px;">Others</p>
                            </a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-9" aria-controls="submenu-5"><i class="fas fa-file"
                                    style="color:white;"></i>
                                <p style="color:white; text-indent: 7px">Approval</p>
                            </a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-10" aria-controls="submenu-5"><i class="fas fa-users"
                                    style="color:black"></i>
                                <p style="color:black;">My Staffs</p>
                            </a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('mystaff')}}">Staff</a>
                                    </li>   
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Performance Overview</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Attendance</a>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Staff</h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/mystaff"
                                                    class="breadcrumb-link">Staff List</a></li>
                                            <!--
                                        <li class="breadcrumb-item active" aria-current="page">Employees
                                            Dashboard</li>
                                        -->
                                        </ol>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-8 col-sm-14 col-14">
                                <div class="card">
                                    <div class="card-body" style="height: 500px">
                                        <form class="splash-container" method="post" action="">
                                            @csrf
                                            @method('post')
                                            <div class="card" style=" width: 150%">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="number" name="fname"
                                                                    placeholder="Employee ID" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="text" name="fname"
                                                                    placeholder="First Name" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="text" name="lname"
                                                                    placeholder="Last Name" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="text" name="mname"
                                                                    placeholder="Middle Name" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" name="phone" type="text"
                                                                    placeholder="Phone (no symbols)" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="email" name="email"
                                                                    placeholder="E-mail" autocomplete="email" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" type="text" name="jobtitle"
                                                                    placeholder="Job Title" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control form-control-lg" id="pass1" type="text" name="facebook"
                                                                    placeholder="Facebook Account" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group pt-2">
                                                            <button class="btn btn-block btn-primary" type="submit" style="background-color: #463426">Update </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        

    </div>
    </div>
    @include('home.modal.editstaff')
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('home.footer')
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="home/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="home/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="home/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="home/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="home/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="home/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="home/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="js/editstaff.js"></script>
    <script src="home/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>

