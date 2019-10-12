<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

input[type=text],input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



#login {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#login:hover {
    background-color: #45a049;
}

* {
    box-sizing: border-box;
}

html {
    font-family: "Lucida Sans", sans-serif;
}
header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 10px;
}

#dv1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 70px;
}

#dv2 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 60px;
}

.desc{
	    padding: 50px;
}

#signup{
    background-color: #0000f0;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
#signup:hover {
    background-color: #0000fd;
}

img{
		height: 50%;
		width: 50%;
		
}

[class*="col-"] {
    float: left;
    padding: 15px;
}

#p1 {
	
	color:white;
	background-color:black;
	position: fixed;
	bottom:0;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
</style>
</head>
<title>Ramchandani Clinic</title>
<body>
<?php include_once("analyticstracking.php") ?>
<header>
  <h1>Online Appointment Booking for Ramchandani Clinic</h1>
  <div class="col-11">
	</div>
	<form action="signup.php" method="post">
  <button id ="signup">SIGN UP</button>
  </form>
</header>
<div class="desc">

<div class="col-5" id="dv1">
<img src = "img.jpg">
  <h3>Dr. Neha Ramchandani</h3>
  <p>
     M.A, M.Phil(Psych), D.H.B.<br><br>
	 Clinical Psychologist and Homeopath
  </p>
</div>
<div	 class="col-2">
</div>
<div class="col-5" id="dv2">
<form method = "post" action = "#">
<h3>Patient Login</h3>
  <input type="text" name="user" placeholder = "Username"><br>
  <input type="password" name="pwd" placeholder = "Password"><br><br>
  <button type="submit" name="submit" id = "login">LOGIN</button>
  <a href="signup.php">New to this site? Signup here</a>
</div>
</div>
<?php
	session_start();
	if(isset($_SESSION['user']))
		header('Location:booking.php');
	if(isset($_POST['submit']))
	{
		$con=mysqli_connect("localhost","id1493254_rajramchandani","Swift123!","id1493254_doctordb") or die("couldn't to the  server");
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];
		$query = "select email,Password from patient where user='$user' and Password='$pwd'";
		$res = mysqli_query($con,$query);
		
		if(mysqli_num_rows($res) == 1)
		{
			$_SESSION['user'] = $user;
			header('Location:booking.php');
		}
		else
		{
			echo '<div style="text-align:center">Invalid username or Password</div>';
		}
	}
 ?>

</body>
</html>
