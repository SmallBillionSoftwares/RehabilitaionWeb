<?php 

require 'checkLogin.php';
require 'connection.php';


$total=0;
$total1=0;
$total2=0;
  

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="Styles/image/facon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Dashboard</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- fontawesome icons -->
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

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
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript" src="Styles/js/loader.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  

     <!-- pending enrollments chart -->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Number of gender'],

        <?php 

         //sql query
     $sql="SELECT gender, COUNT(id) AS count
FROM pending_enrol
GROUP BY gender";
                                       
          // quering database
     $result=$connect->query($sql);

 // check results if its empty
 if ($result-> num_rows >0) {
                    $total=0;                        
       // looping through the results
       while ($row = $result-> fetch_assoc()) {
echo "['".$row['gender']."',".$row['count']."],";
$total+=$row['count'];
       }
   }
       ?>
            
        ]);

        var options = {
          title: 'Total Number <?php echo $total; ?>',
           pieHole: 0.4,
          

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

                <!-- Abuse reports chart -->
        <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Number of gender'],

        <?php 

         //sql query
     $sql="SELECT gender, COUNT(id) AS count
FROM report_abuse
GROUP BY gender";
                                       
          // quering database
     $result=$connect->query($sql);

 // check results if its empty
 if ($result-> num_rows >0) {
             $total1=0;                               
       // looping through the results
       while ($row = $result-> fetch_assoc()) {
echo "['".$row['gender']."',".$row['count']."],";
$total1+=$row['count'];
       }
   }
       ?>
            
        ]);

        var options = {
           title: 'Total Number <?php echo $total1; ?>',
        legend: 'none',
          pieSliceText: 'label',
          slices: {  0: {offset: 0.1
                    },
           1: {offset: 0.2},
          },

is3D: true,
 
        
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>

    <!-- Approved enrollments chart  -->
        <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Number of gender'],

        <?php 

         //sql query
     $sql="SELECT gender, COUNT(id) AS count
FROM approved_enrol
GROUP BY gender";
                                       
          // quering database
     $result=$connect->query($sql);

 // check results if its empty
 if ($result-> num_rows >0) {
                $total2=0;                            
       // looping through the results
       while ($row = $result-> fetch_assoc()) {
echo "['".$row['gender']."',".$row['count']."],";
$total2+=$row['count'];
       }
   }
       ?>
            
        ]);

        var options = {
           title: 'Total Number <?php echo $total2; ?>',
          title: '',
           is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
    </script>

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
                <li class="active">
                    <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            

                  <li class="nav-item">
                   <a href="Enrolments.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>
                               Enrollements
                            </p>
                        </a>
                       

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

                    <a class="navbar-brand" href="#">Dashboard</a>
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
                               
                             
                                <li><a href="logout.php">Logout</a></li>
                              </ul>
                        </li>

      <li class="separator hidden-lg"></li>
             </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Abuse Report</h4>  
                            </div>


                            <div class="content">

                                <div id="piechart_3d1" style="width: 400px; height: 300px;" ></div>
            
                            </div>
                        </div>
                    </div>


                <div class="row">
                   

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Enrollements</h4>
                            </div>
                            <div class="content">
                              <div id="piechart_3d" style="width: 400px; height: 300px;" ></div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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