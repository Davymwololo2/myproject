<?php session_start();
if(!isset($_SESSION["customer_name"])){
    echo '<script>windows: location="login.php"</script>';    
    }
   ?>    
       <?php
if (isset($_POST['logout'])) {
    // code...
 session_start;
unset($_SESSION['customer_name']);
session_destroy();
 echo '<script>windows: location="login.php"</script>';
}
?> 



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billing system| downtown </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DOWNTOWN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                                        <?php
                            if(isset($_SESSION["customer_name"])){
                        ?>
                                <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['customer_name']; ?></span></a></li>

                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>


                        <?php }
                            else
                            {
                      
                               echo '<script>windows: location="login.php"</script>';
                      
                            }

                        ?>



        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="view_details.php"><i class="fa fa-desktop"></i>clients details</a>
                    </li>
                    <li>
                        <a href="meter-reading.php"><i class="fa fa-pencil-square-o"></i>Record meter-reading</a>
                    </li>
                    <li>
                        <a href="register.php"><i class="fa fa-edit"></i> Register new clients </a>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
         <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BootstrJap s -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>