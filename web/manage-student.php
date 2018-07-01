<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="dashboard.php" class="site_title"><i class="fa fa-book"></i> <span>Learning MS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Academic Officer</h3>
                        <ul class="nav side-menu">
                            <li><a href="company-manager.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:"> Profile</a></li>
                                <li>
                                    <a href="javascript:">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
<!--            <div class="row tile_count">-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>-->
<!--                    <div class="count">2500</div>-->
<!--                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>-->
<!--                    <div class="count">123.50</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>-->
<!--                    <div class="count green">2,500</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>-->
<!--                    <div class="count">4,567</div>-->
<!--                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>-->
<!--                    <div class="count">2,315</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
<!--                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>-->
<!--                    <div class="count">7,325</div>-->
<!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- /top tiles -->
            <!-- Start of dashboard view -->

            <div class="row" id="add-course">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div>
                                <button type="submit" class="btn btn-success"><a href="add-student.php">Add New</a></button>
                            </div>
                            <h2>Enter Student Section Details<small>Add new Student section to the system.</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />


                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                                <thead>
                                <tr>
                                    <th>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    </th>
                                    <th>Student Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    </td>
                                    <td>Jennifer Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>
                                        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/pencil-square-o"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/pencil-square-o"><i class="fa fa-remove"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <th><input type="checkbox" id="check-all" class="flat"></th>
                                    </td>
                                    <td>Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>
                                        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/pencil-square-o"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a href="#/pencil-square-o"><i class="fa fa-remove"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <!-- End of dashboard view -->
            <br />
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Learning Mangement System by <a href="https://colorlib.com">....</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>
</html>
