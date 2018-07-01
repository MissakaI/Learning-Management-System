<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico"/>

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
                        <h2>2017/CS/500</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a onclick="navClick('existing-course')"><i class="fa fa-home"></i> My Courses </a></li>
                            <li><a onclick="navClick('new-course')"><i class="fa fa-home"></i> New Courses </a></li>
                            <li><a onclick="navClick('company')"><i class="fa fa-home"></i> Company </a></li>
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
                                <img src="images/img.jpg" alt="">2017/CS/500
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
            <div class="">

                <!-- Start of dashboard views -->

                <!--Start of current enrollments view-->
                <div class="row" id="enrollments">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>My Courses
                                    <small>List of course enrollments</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <!--                                            <th>-->
                                            <!--                                                <input type="checkbox" id="check-all" class="flat">-->
                                            <!--                                            </th>-->
                                            <th class="column-title">Course ID</th>
                                            <th class="column-title">Course</th>
                                            <th class="column-title">Section</th>
                                            <th class="column-title">Year</th>
                                            <th class="column-title">Semester</th>
                                            <th class="column-title">Grade</th>
                                            <!--                                            <th class="column-title"></th>-->
                                        </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of professor view-->

                <!--Start of new enrollment view-->
                <div class="row" id="new-enrollment">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Available Courses
                                    <small>Course Sections that you can apply</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Course ID</th>
                                            <th class="column-title">Course</th>
                                            <th class="column-title">Section</th>
                                            <th class="column-title">Year</th>
                                            <th class="column-title">Semester</th>
                                            <th class="column-title">Professor</th>
                                            <th class="column-title">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of new enrollment view-->

                <!--Start of current enrollments view-->
                <div class="row" id="company">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Industry Sessions
                                    <!--                                    <small>List of course enrollments</small>-->
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <!--                                            <th>-->
                                            <!--                                                <input type="checkbox" id="check-all" class="flat">-->
                                            <!--                                            </th>-->
                                            <th class="column-title">Company Name</th>
                                            <th class="column-title">Year</th>
                                            <th class="column-title">Semester</th>
                                            <th class="column-title">Assesment</th>
                                            <!--                                            <th class="column-title"></th>-->
                                        </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of professor view-->

                <!-- End of dashboard views -->
            </div>
            <!-- /page content -->
        </div>

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Learning Management System
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

<script>
    $(document).ready(function () {
        $('#new-enrollment').css("display", "none");
        $('#enrollments').css("display", "block");
        $('#company').css("display", "none");
    });

    function navClick(value) {
        console.log(value);
        let existelement = $('#enrollments');
        let newelement = $('#new-enrollment');
        let compelement = $('#company');

        if (value === 'existing-course') {
            existelement.css("display", "block");
            newelement.css("display", "none");
            compelement.css("display", "none");

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var obj = JSON.parse(xhttp.responseText);
                    console.log(obj);
                }
            };

            xhttp.open("GET", "../controller/StudentController.php?action=existing-course", true);
            xhttp.send();

        } else if (value === 'new-course') {
            existelement.css("display", "none");
            newelement.css("display", "block");
            compelement.css("display", "none");

            console.log("working 12");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var obj = JSON.parse(xhttp.responseText);
                    console.log(obj);
                }
            };

            xhttp.open("GET", "../controller/CourseController.php?action=new-course", true);
            xhttp.send();
        } else if (value === 'company') {
            existelement.css("display", "none");
            newelement.css("display", "none");
            compelement.css("display", "block");

            console.log("working 12");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var obj = JSON.parse(xhttp.responseText);
                    console.log(obj);
                }
            };

            xhttp.open("GET", "../controller/CompanyController.php?action=student-company", true);
            xhttp.send();
        }
    }
</script>

</body>
</html>
