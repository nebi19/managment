<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{asset("css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{asset("css/ionicons.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{asset("css/morris/morris.css")}}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{asset("css/jvectormap/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="{{asset("css/fullcalendar/fullcalendar.css")}}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{asset("css/daterangepicker/daterangepicker-bs3.css")}}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{asset("css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{asset("css/AdminLTE.css")}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Adika taxi service
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{{asset("img/avatar3.png")}}" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                 
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{URL::to('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    @include('inc.navbar')
                </section>
                <!-- /.sidebar -->
            </aside>
           

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                  @yield('contents')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="{{asset("js/jquery-ui-1.10.3.min.js")}}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{asset("js/bootstrap.min.js")}}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{asset("js/plugins/morris/morris.min.js")}}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{asset("js/plugins/sparkline/jquery.sparkline.min.js")}}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{asset("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="{{asset("js/plugins/fullcalendar/fullcalendar.min.js")}}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset("js/plugins/jqueryKnob/jquery.knob.js")}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{asset("js/plugins/daterangepicker/daterangepicker.js")}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset("js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{asset("js/plugins/iCheck/icheck.min.js")}}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{asset("js/AdminLTE/app.js")}}" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset("js/AdminLTE/dashboard.js")}}" type="text/javascript"></script>        

    </body>
</html>