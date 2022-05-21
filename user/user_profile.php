<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

  <meta charset="utf-8">
  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style-footer.css">
      <link href="css/style-header.css" rel="stylesheet">
      <link href="css/style-body.css" rel="stylesheet">
      <link href="css/style2.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="icon" href="images/resource/imageselection.png" type="image/x-icon">

</head>

<?php
include("db.php");
$name=$_SESSION['uname'];
$result=mysqli_query($con,"select username,name,email,phone,userimage from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		$uname=$name;
		$rname=$row[1];
		$email=$row[2];
		$phone=$row[3];
		$userpic=$row[4];
		}
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
                  <li>
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

<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<center>
				<div class="left_grid_info">
					<h1><?php echo $rname; ?></h1><br>
					<img class="im" src=<?php echo $userpic; ?> height="200" width="180">
				</div></center><br><br>
				<div class="left_grid_info">
					<p class="p1">Username : <?php echo $uname; ?></p><br>
					<p class="p1">Email : <?php echo $email; ?></p><br>
					<p class="p1">Phone : <?php echo $phone; ?></p><br>
				</div>
			</div>
			<div class="login_info">
				<a href="../change_graphicalpw/check_textpw.html">Change Graphical Password</a><br><br><br>
				<a href="../change_text_pw/change_pw.html">Change Text Password</a><br><br><br>
				<a href="../change_profilepic/change_profile_pic.html">Change Profile Picture</a><br><br><br>
				<a href="../change_user_details/change_profile_info.html">Change Profile Details</a><br><br><br><br><br>
				<button class="btn btn-danger btn-block" type="button" onclick="window.location.href = 'logout.php'">Logout</button>
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
