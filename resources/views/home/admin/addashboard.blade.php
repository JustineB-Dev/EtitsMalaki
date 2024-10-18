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
        @include('home.components.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar " style="background-color: #463426;>
            <div class="menu-list" >
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
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('admindashboard')}}"  style="display: flex; align-items: center;"><i class="fa fa-fw fa-user-circle"
                                    style="color:black"></i>
                                <p style="color:black;">Dashboard</p>
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
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-10" aria-controls="submenu-5"><i class="fas fa-users"
                                    style="color:white"></i>
                                <p style="color:white;">My Staffs</p>
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
                                <h2 class="pageheader-title">Dashboard </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('admindashboard')}}"
                                                    class="breadcrumb-link">Dashboard</a></li>
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
                            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-14 col-14">
                                <div class="card">
                                    <div class="card-body" style="height: 500px">
                                        <hr width="145px" style="margin-top: -20px; border: 1px solid black"
                                            align="left">
                                        <h5><i class="bi bi-calendar mr-2"></i>News and Events
                                        </h5>
                                        <hr>
                                        <p>No News and Events yet</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-14 col-14" id="row1">
                                <div class="card">
                                    <div class="card-body" style="height: 500px">
                                        <hr width="130px" style="margin-top: -20px; border: 1px solid black"
                                            align="left">
                                        <h5><i class="bi bi-bell mr-2"></i>Announcement</h5>
                                        <hr>
                                        <main>
                                            <div class="announcementcard" style="align-items: center">
                                                <img alt="photo" src="home/assets/images/avatar2.png" width="60px"
                                                    height="60px" style="margin-left: 5px" />
                                                <div class="description">
                                                    <p style="margin: 0px"><b>Mr. Bench Manuel's Birthday</b></p>
                                                    <p>November 23</p>
                                                </div>
                                                <div class="align-self-end ml-auto"
                                                    style="margin-bottom: 12px; margin-right: 10px">
                                                    <button type="button" class="btn btn-primary"
                                                        style="border-radius: 10px; font-size: 12px">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                            <div class="announcementcard" style="align-items: center">
                                                <img alt="photo" src="home/assets/images/avatar2.png" width="60px"
                                                    height="60px" style="margin-left: 5px" />
                                                <div class="description">
                                                    <p style="margin: 0px"><b>Mr. Angelo Abargos's Birthday</b></p>
                                                    <p>November 12</p>
                                                </div>
                                                <div class="align-self-end ml-auto"
                                                    style="margin-bottom: 12px; margin-right: 10px">
                                                    <button type="button" class="btn btn-primary"
                                                        style="border-radius: 10px; font-size: 12px">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                            <div class="announcementcard" style="align-items: center">
                                                <img alt="photo" src="home/assets/images/avatar2.png" width="60px"
                                                    height="60px" style="margin-left: 5px" />
                                                <div class="description">
                                                    <p style="margin: 0px"><b>Mr. Bench Manuel's 3 days Leave has been
                                                            Approve</b></p>
                                                    <p>November 23 - 25</p>
                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <!--
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Recent Orders</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                    <th class="border-0">Image</th>
                                                    <th class="border-0">Product Name</th>
                                                    <th class="border-0">Product Id</th>
                                                    <th class="border-0">Quantity</th>
                                                    <th class="border-0">Price</th>
                                                    <th class="border-0">Order Time</th>
                                                    <th class="border-0">Customer</th>
                                                    <th class="border-0">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->


                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Employee Overview  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"><img src="home/assets/images/employee.png" width="16"
                                        height="19" style="vertical-align:middle;margin: 7px 0px" /> Employee
                                    Overview</h5>
                                <div class="card-body">

                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-muted">Total of Barista</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1>4</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ============================================================== -->
                                            <!-- end sales  -->
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->
                                            <!-- new customer  -->
                                            <!-- ============================================================== -->
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-muted">Total of Cashier</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1>2</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ============================================================== -->
                                            <!-- end new customer  -->
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->

                                            <!-- visitor  -->
                                            <!-- ============================================================== -->
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-muted">New Hired</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1>0</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ============================================================== -->
                                            <!-- end visitor  -->
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->
                                            <!-- total orders  -->
                                            <!-- ============================================================== -->
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-muted">Overall Total of Employees</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1>6</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ============================================================== -->
                                                <!-- end total orders  -->
                                                <!-- ============================================================== -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- Start of Status Chart Metric  -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <div class="col">
                                            <div class="chart-container">
                                                <h2>Employee Status</h2>
                                                <div class="simple-bar-chart">
                                                    <div class="item" style="--clr: #a46432; --val: 100">
                                                        <div class="label">
                                                            <h6>Active</h6>
                                                        </div>
                                                        <div class="value">100%</div>
                                                    </div>

                                                    <div class="item" style="--clr: #a46432; --val: 0">
                                                        <div class="label">
                                                            <h6>Inactive</h6>
                                                        </div>
                                                        <div class="value">0%</div>
                                                    </div>

                                                    <div class="item" style="--clr: #a46432; --val: 17">
                                                        <div class="label">
                                                            <h6>On Leave</h6>
                                                        </div>
                                                        <div class="value">17%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body" style="height: 330px">
                                                    <hr width="110px;" style="margin-top: -20px; border: 1px solid black;" align="left">
                                                    <div class="row">
                                                        <div class="col">
                                                        <h5><i class="bi bi-bookmark mr-2"></i>Goal Setting</h5>
                                                        </div>
                                                        <div class="col">
                                                            <span class="goal-edit"><i class="fa fa-pen-to-square"></i><span class="tooltip-text">Imma dik</span></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card-body p-0">
                                                        <ul class="social-sales list-group list-group-flush">
                                                            <li class="list-group-item social-sales-content">
                                                                <div class="row">
                                                                    <div class="col border-right">
                                                                        <h4 style="text-align: center; color:black">Current Goal
                                                                            Overview:</h4>
                                                                        <p>&bull;&emsp;80% of employees have individual performance goals set for this quarter.</p>
                                                                        <p style="margin-bottom: 5px"><b>Goal Example:</b></p>
                                                                        <p style="margin-bottom: 0px">&emsp;&bull;&emsp;Baristas: "Acheive 95% accuracy in order preperation."</p>
                                                                        <p >&emsp;&bull;&emsp;Cashier: "provide excellent customer service."</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <h4 style="text-align: center; color:black">Goal Completion
                                                                            Status:</h4>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end here-->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end customer acquistion  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end product sales  -->
            <!-- ============================================================== -->
        </div>


    </div>
    </div>
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
    <script src="home/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
