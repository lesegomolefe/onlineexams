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
    

    <script>
    function validateForm() {
     var x = document.forms["form"]["email"].value; var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf("."); if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) { alert("Not a valid e-mail address."); return false; } var a = document.forms["form"]["password"].value; if (a == null || a == "") { alert("Password must be filled out"); return false; } if (a.length < 5 || a.length > 25) { alert("Passwords must be 5 to 25 characters long."); return false; }
      //var b = document.forms["form"]["cpassword"].value; if (a != b) { alert("Passwords must match."); return false; }
    }
  </script>
    <!--alert message end-->

</head>

<body>
    <!--header start-->
    <div class="header">

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
                        echo '<a href="index.php" class="pull-right sub1 btn title3" style="border-radius:0%"  ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Register</a>&nbsp;';
                    } else {
                        echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a>&nbsp;';
                    }
                    ?>

                    <a href="index.php" style="border-radius:0%" class="pull-right btn sub1 title3"><span
                            class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
                </div>
    </div>
    
    </div>

    <div class="bg1">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 panel ">

                <form style= "margin:10px"  class="form-horizontal" name="form" action="login.php?q=index.php" onSubmit="return validateForm()"
                    method="POST">
                    <fieldset>
                        <p class="text-center"><b>User Login</b></p>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label title1" for="email"></label>
                            <div class="col-md-12">
                                <input id="email" name="email" placeholder="Email ID" class="form-control input-md"
                                    type="email">

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="password"></label>
                            <div class="col-md-12">
                                <input id="password" name="password" placeholder="Password"
                                    class="form-control input-md" type="password">

                            </div>
                        </div>

                        <?php if (@$_GET['q7']) {
                            echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                        } ?>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" class="sub btn btn-primary" value="Login" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>


    </div>

    </div>
    </div>



    <!--Footer start-->
    <div class="row footer">

        <div class="col-md-4 box">
            <a href="admin_home.php">Admin Login</a>
        </div>
        <div class="col-md-4 box">
            <a href="developer.php">Developer</a>
        </div>
        <div class="col-md-4 box">
            <a href="feedback.php" target="_blank">Feedback</a>
        </div>
    </div>

</body>