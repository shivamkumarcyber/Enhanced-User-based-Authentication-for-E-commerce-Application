<?php
session_start();
ob_start();
?>

<html>
<head>
<title>Successful!</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="icon" href="images/resource/imageselection.png" type="image/x-icon">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
</head>

<?php

include('db.php');

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$email=$_SESSION['a'][3];
$phone=$_SESSION['a'][4];
$image1=$_SESSION['a'][5];
$slice1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$slice2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$slice3=$_SESSION['a'][10];

$query="INSERT into user(username,password,name,email,phone,image1,slice1,image2,slice2,image3,slice3,userimage) 
values('$name','$password','$realname','$email',$phone,'$image1','$slice1','$image2','$slice2','$image3','$slice3','../user/images/user/default.png')";
$result=mysqli_query($con, $query);

?>

<body>
<!--Main Header-->
<nav class="navbar navbar-default">
        <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                          <li class="active">
                                <a href="../index.html">Home</a>
                          </li>
                          <li>
                                <a href="../about.html">About</a>
                          </li>                                            
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!--End Main Header -->

<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Manage Your User Account</h1>
					<p>This system provides high security to your account through the graphical password.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Create New Account</h2>
                <p>You have succesfully registered !</p>
                <p class="account2">Click <a href="../log_in/login.html">here</a> to login</p>
			</div>
		</div>
	</div>

</div>



<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>


<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>