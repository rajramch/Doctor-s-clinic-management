<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

#home{
    background-color: #0000f0;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
#home:hover {
    background-color: #0000fd;
}


input[type=text],input[type=password], 
input[type=email],input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

* {
    box-sizing: border-box;
}
[class*="col-"] {
    float: left;
    padding: 15px;
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
html {
    font-family: "Lucida Sans", sans-serif;
}
header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 10px;
}
</style>
<script>
function myfunction()
  {
      alert("Account created successfully");
  }
  </script>
</head>
<title>Signup</title>
<body>
<?php include_once("analyticstracking.php") ?>
<header>
  <h1>Online Appointment Booking for Ramchandani Clinic</h1> 
  <div class ="col-11">
  </div>
  <form action="index.php" method="post">
  <button id ="home">Home</button>
  </form>
</header>
<div class="col-3">
</div>
<div class="col-6">
<form method = "post" action = "new.php">
<input type = "text" placeholder= "username"  name="user"><br>
<input type = "email" placeholder= "Email"  name="email" required><br>
<input type = "text" placeholder="Age" name = "age"><br>
<input type = "password" placeholder= "password"  name="pwd">
<input type = "password" placeholder= "repassword"  name="repwd">
Gender:
<input type = "radio" name="gender" value="m">male
<input type = "radio" name="gender" value="f">female
<br>
<input type = "submit"  value="submit" name ="submit">

</form>
</div>


</body>
</html>



