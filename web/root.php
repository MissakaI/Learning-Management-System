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
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </li>
                            <li><a onclick="navClick('professor')"><i class="fa fa-home"></i> Professor </a></li>
                            <li><a onclick="navClick('department')"><i class="fa fa-home"></i> Department </a></li>
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
            <div class="">
                <!-- top tiles -->
                <div class="row tile_count" id="dash">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                        <div class="count">123.50</div>
                        <span class="count_bottom"><i class="green"><i
                                        class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                        <div class="count green">2,500</div>
                        <span class="count_bottom"><i class="green"><i
                                        class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                        <div class="count">4,567</div>
                        <span class="count_bottom"><i class="red"><i
                                        class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                        <div class="count">2,315</div>
                        <span class="count_bottom"><i class="green"><i
                                        class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                        <div class="count">7,325</div>
                        <span class="count_bottom"><i class="green"><i
                                        class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                </div>
                <!-- /top tiles -->
                <!-- Start of dashboard views -->

                <!--Start of professor view-->
                <div class="row" id="professor">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Academic Staff
                                    <small>List of professors</small>
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
                                <div class="form-group">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <button onclick="btnClick('professor')" id="btn-add-professor" type="button"
                                                class="btn btn-primary left">Add new professor
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ln_solid"></div>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <!--                                            <th>-->
                                            <!--                                                <input type="checkbox" id="check-all" class="flat">-->
                                            <!--                                            </th>-->
                                            <th class="column-title">Emp Id</th>
                                            <th class="column-title">Name</th>
                                            <th class="column-title">Office</th>
                                            <th class="column-title">Age</th>
                                            <th class="column-title">Start date</th>
                                            <th class="column-title">Salary</th>
                                            <th class="column-title" colspan="2">Actions</th>
                                            <!--                                            <th class="column-title"></th>-->
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr class="even pointer">
                                            <!--                                            <td class="a-center ">-->
                                            <!--                                                <input type="checkbox" class="flat" name="table_records">-->
                                            <!--                                            </td>-->
                                            <td class=" ">121000040</td>
                                            <td class=" ">May 23, 2014 11:47:56 PM</td>
                                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" ">John Blank L</td>
                                            <td class=" ">Paid</td>
                                            <td class=" ">Paid</td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of professor view-->

                <!--Start of Department view-->
                <div class="row" id="department">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Faculty Departments
                                    <small></small>
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
                                <div class="form-group">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <button onclick="btnClick('department')" id="btn-add-department" type="button"
                                                class="btn btn-primary left">Add new Department
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ln_solid"></div>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Department Id</th>
                                            <th class="column-title">Name</th>
                                            <th class="column-title">Location</th>
                                            <th class="column-title">Mobile No</th>
                                            <th class="column-title">Admin ID</th>
                                            <th class="column-title" colspan="2">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr class="even pointer">
                                            <!--                                            <td class="a-center ">-->
                                            <!--                                                <input type="checkbox" class="flat" name="table_records">-->
                                            <!--                                            </td>-->
                                            <td class=" ">121000040</td>
                                            <td class=" ">May 23, 2014 11:47:56 PM</td>
                                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" ">John Blank L</td>
                                            <td class=" ">Paid</td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Department view-->

                <!--Start of Company view-->
                <div class="row" id="company">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Company Sessions
                                    <small>Companies offering sessions to undergraduates</small>
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
                                <div class="form-group">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <button onclick="btnClick('company')" id="btn-add-company" type="button"
                                                class="btn btn-primary left">Add new Company Session
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ln_solid"></div>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table">
                                        <thead>
                                        <tr class="headings">
                                            <th class="column-title">Comapny Name</th>
                                            <th class="column-title">Semeter</th>
                                            <th class="column-title">Year</th>
                                            <th class="column-title">Company Manager Name</th>
                                            <th class="column-title">Username</th>
                                            <th class="column-title">Password</th>
                                            <th class="column-title" colspan="2">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr class="even pointer">
                                            <td class=" ">121000040</td>
                                            <td class=" ">May 23, 2014 11:47:56 PM</td>
                                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" ">John Blank L</td>
                                            <td class=" ">Paid</td>
                                            <td class=" ">Paid</td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fa-hover col-md-3 col-sm-4 col-xs-12"><a
                                                            href="#/pencil-square-o"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Company view-->

                <!--Start of add-professor view-->
                <div class="row" id="add-professor">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Professor to System
                                    <small>Fill the form below to proceed</small>
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
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp-id">Employee
                                            ID:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="empa-id" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name: <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="office" class="control-label col-md-3 col-sm-3 col-xs-12">Office:
                                            <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="office" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="office">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile No:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="mobile" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="mobile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Depatment Code</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="dep_code" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success" onclick="send_prof_details()">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of add-professor view-->

                <!--Start of add-department view-->
                <div class="row" id="add-department">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Department to System
                                    <small>Fill the form below to proceed</small>
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
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp-id">Department
                                            Code: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="dep-code" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name: <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="loaction" class="control-label col-md-3 col-sm-3 col-xs-12">Location:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="location" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="location">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile No:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="office" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="mobile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Admin ID</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success" onclick="send_details()">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of add-department view-->

                <!--Start of add-company view-->
                <div class="row" id="add-company">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="view-books">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add New Professor to System
                                    <small>Fill the form below to proceed</small>
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
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="com-name">Department
                                            Name: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="com-name" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="semeter">Semester:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="semester" name="semester" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="year" class="control-label col-md-3 col-sm-3 col-xs-12">Year: <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="year" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="year">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="com-man-name" class="control-label col-md-3 col-sm-3 col-xs-12">Company
                                            Manager Name: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="com-man-name" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="com-man-name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">User
                                            Name: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="username" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" class="form-control col-md-7 col-xs-12" type="password"
                                                   name="password">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success" onclick="">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of add-company view-->

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
        $('#department').css("display", "none");
        $('#professor').css("display", "none");
        $('#company').css("display", "none");
        $('#add-professor').css("display", "none");
        $('#add-department').css("display", "none");
        $('#add-company').css("display", "none");

        load_deparment_code();
    });

    function btnClick(value) {
        let depelement = $('#add-department');
        let profelement = $('#add-professor');
        let compelement = $('#add-company');

        if (value === 'department') {
            depelement.css("display", "block");
            depelement.focus();
        } else if (value === 'professor') {
            profelement.css("display", "block");
            profelement.focus();
        } else if (value === 'company') {
            compelement.css("display", "block");
            compelement.focus();
        }
    }

    function navClick(value) {
        console.log(value);
        let depelement = $('#department');
        let profelement = $('#professor');
        let compelement = $('#company');
        let addDepElement = $('#add-department');
        let addComElement = $('#add-company');
        let addProfElement = $('#add-professor');

        if (value === 'department') {
            depelement.css("display", "block");
            profelement.css("display", "none");
            compelement.css("display", "none");
            addComElement.css("display", "none");
            addProfElement.css("display", "none");
        } else if (value === 'professor') {
            depelement.css("display", "none");
            profelement.css("display", "block");
            compelement.css("display", "none");
            addDepElement.css("display", "none");
            addComElement.css("display", "none");
        } else if (value === 'company') {
            depelement.css("display", "none");
            profelement.css("display", "none");
            compelement.css("display", "block");
            addProfElement.css("display", "none");
            addDepElement.css("display", "none");
        }
    }


    function send_prof_details() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (xhttp.responseText === 'TRUE') {
                    $('#result').append(
                        "<div class='alert alert-success'>Professor Added</div>"
                    );
                } else {
                    $('#result').append(
                        "<div class='alert alert-danger'>Professor Adding Failed</div>"
                    );
                }
            }
        };

        xhttp.open("POST", "ProfessorController.php", true);
        xhttp.send("Empid=" + $("#empa-id").val() + "&Name=" + $("#name").val() + "&Office=" + $("#office").val() + "&Phone=" + $("#mobile").val() + "&DepartmentCode=" + $("#dep-code:selected").text() + "&action=add");

    }


    function load_deparment_code() {
        console.log("working 12");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
            }
        };

        xhttp.open("GET", "../controller/DepartmentController.php?action=view-all", true);
        xhttp.send();

    }

</script>

</body>
</html>
