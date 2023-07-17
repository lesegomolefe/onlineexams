<?php
 include_once 'dbConnection.php';
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>FEEDBACK </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <!--alert message end-->

</head>

<body>


    <!--header start-->
    <div class="row header">
        <div class="col-lg-6">
            <span class="logo">Online Student Exam System</span>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <?php
            include_once 'dbConnection.php';
            session_start();
            if ((!isset($_SESSION['email']))) {
                echo '<a href="loginpage.php" class="pull-right sub1 btn title3" style="border-radius:0%" ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Login</a>&nbsp;';
            } else {
                echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a>&nbsp;';
            }
            ?>

            <a href="index.php" style="border-radius:0%" class="pull-right btn sub1 title3"><span
                    class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
        </div>
    </div>

    <div class="bg1">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6 panel" style="background-image:url(image/icn2.jpg); min-height:430px;">

                    <div  id="developers">
                        <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                  
                                    <h4 class="modal-title" style="font-family:'typo' "><span
                                            style="color:black">Developer</span></h4>
                                </div>

                                <div class="modal-body">
                                    <p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="image/lesego (1).jpeg" width=100 height=100 alt="lesego molefe"
                                                class="img-rounded">
                                        </div>
                                        <div class="col-md-5">
                                            <a style="color:#202020; font-family:'typo' ; font-size:18px; text-decoration:none"
                                                title="Find on Facebook">lesego molefe</a>
                                            <h4 style="color:#202020; font-family:'typo' ;font-size:16px"
                                                class="title1">
                                                0624959771</h4>
                                            <h4 style="font-family:'typo' ">lesegorelay9@gmail.com</h4>
                                            <h4 style="font-family:'typo' ">Master of Programming</h4>
                                            <h4 style="font-family:'typo' ">Pretoria 012</h4>
                                        </div>
                                    </div>
                                    </p>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div><!--container end-->

    <!--Footer start-->
  <div class="row footer">

<div class="col-md-4 box">
  <a href="admin_home.php" target="_blank">Admin Login</a>
</div>
<div class="col-md-4 box">
  

</div>
<div class="col-md-4 box">
  <a href="feedback.php" target="_blank">Feedback</a>
</div>
</div>



</body>