<?<?php 

require 'checkLogin.php';

 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="Styles/image/facon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>User Profile</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- fontawesome icons -->
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
 

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/> -->

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/image.css">

</head>
<body>

<div class="wrapper">

    <!-- start of side navigation -->
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-2.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                   Sober Kenya
                </a>
            </div>
            <!-- end of logo -->

                <!-- start of navigation links -->
              <ul class="nav">
                <li class="nav-item">
                    <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            

                  <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="pe-7s-note2"></i>
                            <p>
                                Enrollements
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="pendingEnrolments.php">
                                        <!-- <span class="sidebar-mini">P</span> -->
                                         
                                        <span class="sidebar-normal">Pending Enrollements</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="ApprovedEnrolment.php">
                                        <span class="sidebar-normal">Approved Enrollements</span>
                                    </a>
                                </li>
                               
        
                            </ul>
                        </div>
                    </li>

                  <li class="nav-item">
                        <a href="abuseReport.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>
                               Abuse Reports
                            </p>
                        </a>
                       
                    </li>

            </ul>
            <!-- end of navigation links -->

        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- toggle button for small devices -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- end of toggle button -->

                    <a class="navbar-brand" href="#">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                <!-- Nav Item - User Information -->

          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                          <?php echo $_SESSION['user']; ?>
                                         <img class="img-profile rounded-circle" src="Styles/image/bmw.jpg"  
                style="border-radius:50%; width:30px;height:30px; ">
                                        
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="user.php">User Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                              </ul>
                        </li>

            <li class="separator hidden-lg"></li>
             </ul>
                </div>
            </div>
        </nav>


      


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>

                          <li>
                            <a href="enrol.php">
                               Enrol
                            </a>
                        </li>
                        <li>
                            <a href="report.php">
                               Report Abuse
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
                               About
                            </a>
                        </li>
                        <li>
                            <a href="moreondrugs.php">
                               More on Drugs
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>  <a href="mailto:soberkenya@gmail.com">Sober Kenya</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    

</html>
