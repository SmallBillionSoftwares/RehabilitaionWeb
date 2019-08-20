<?php 

require 'checkLogin.php';

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="Styles/image/facon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title> Enrollements</title>

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

    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Styles/css/image.css">
    <link rel="stylesheet" type="text/css" href="Styles/css/table.css">


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   
    <script type="text/javascript" src="Styles/bootStrap/js/jquery-3.3.1.slim.min.js"></script>
     <script src="Styles/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Styles/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="Styles/js/jquery.tabledit.js"></script>
    <script type="text/javascript" src="jquery.tabledit.js"></script>
 


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/image.css">

   

</head>
<body style="background-color: white;">

    <!-- pop up Modal for edit-->
<!-- ######################################################################################################### -->
<div class="modal fade"   id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Pending Enrollements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- start enrol form -->
    <form action="" method="post" style="margin: auto; width:70%; " 
    class="main-form needs-validation" novalidate="false">
    <input type="hidden" name="up_date" id="up_date">
         <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" id="id" disabled="true" name="id" class="form-control" required="true">
                    
        </div>
      <div class="form-group">
                    <label for="name">Full Names</label>
                    <input type="text" name="name" id="name" class="form-control" required="true">
                   
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>

          <div class="form-group">
            <label for="drugAbused">Drug Abused</label>
            <input type="text" name="drugAbused" id="drugAbused" class="form-control">
        </div>

        <div class="form-group">
            <label for="location">Location (County)</label>
            <input type="text" id="location" name="location" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    <!-- end report form -->
    </div>
    </div>
  </div>
</div>
<!-- ########################################################################################### -->


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

                    <a class="navbar-brand" href="#"> Enrollements</a>
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
                   
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Enrollement Details</h4>
                            </div>            
                            </div>

<!-- demo -->

<!-- demo -->

                            <!-- start of table  container-->
                            <div class="table-responsive">
                                <table id="editable_table" class="table table-bordered table-striped">
                                  <thead class="thead thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Drug Abused</th>
                                         <th>Location</th>
                                         <th>Gender</th>
                                         
                                    </tr>
                                </thead>
                                    <?php
                                        // getting connection
                                        require 'connection.php';

                                        //sql query
                                        $sql="SELECT id,name,phone,drug,location,gender FROM pending_enrol ORDER by id DESC";
                                       
                                        // quering database
                                        $result=$connect->query($sql);

                                        // check results if its empty
                                        if ($result-> num_rows >0) {
                                            
                                            // looping through the results
                                            while ($row = $result-> fetch_assoc()) {

                                                //adding values to the table 
                                                echo "<tr><td class='row'>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["drug"]."</td><td>"
                                                .$row["location"]."</td><td>".$row["gender"]."</td>
                                                    
                
                                                </tr>";
                                            }
                                           
                                      
                                        }else{

                                             //results is empty 
                                            echo "0 result";
                                        }

                                        //closing connection
                                        $connect->close();
                                    ?>
       
                                </table>    
                            </div>
                            <!-- end of table container-->

                        </div>
                    </div>
                </div>           
            </div>
        </div>

 

    </div>
</div>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

 <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <script type="text/javascript" src="jquery.tabledit.js"></script>

<!-- Scirpt source files -->
    <script src="Styles/bootStrap/js/popper.min.js"></script>
    <script src="Styles/bootStrap/js/bootstrap.min.js"></script>

        <!--   Core JS Files   -->
 
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

<!-- end of script source files -->
<!--  -->

<!-- for modal popup -->

  <script  type="text/javascript">

   // $(document).ready(function(){
    //    $('.table').Tabledit({
      //  url:'action.php',
       // columns:{
      //       identifier:[0,'id'],
       //      editable:[[1,'name'],[2,'phone'],[3,'drug'],[4,'location'],[5,'gender']]
       //   }
       // restoreButton:false,
       // onSuccess:function(data, textStatus, jqXHR){

        //for removing from table 
    //     if(data.action=='delete'){
    //             $('#'+ data.id).remove();
    //     }

    //    }
    //     });
    // });


</script>


</body>

<!--  -->

    


</html>
