<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

input[type=date],input[type=time], 
input[type=email],input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
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

#logoutbtn{
    background-color: #0000f0;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}
#logoutbtn:hover {
    background-color: #0000fd;
}
#tab{
   position :center;
   background-color : yellow;
   width : 100%;

   
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
html {
    font-family: "Lucida Sans", sans-serif;
}
header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 10px;
}
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
	width: 50%;
}


/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}


</style>
<script>
function myfunction()
  {
      alert("your booking will be confirmed within 24hrs");
  }
  </script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<header>
  <h1>Online Appointment Booking for Ramchandani Clinic</h1>
  <div class ="col-11">
  </div>
<form method = "post" action = "#">  
	<button id="logoutbtn" name="logout">Logout</button>
</form>
</header>

<div class="tab">
  <button  onclick="loadDoc()" id = "defaultOpen">New Booking</button>
  <button  onclick="loadDoc1()">Previous Booking</button>
  </div>
  
  <div class ="col-3">
  </div>
  
 <p id="NewB">
  </p>
  
</div>
<?php

	session_start();
 if(!isset($_SESSION['user']))
    header('Location:index.php');

if(isset($_POST['logout']))
    {
          session_destroy();
          header('Location:index.php');
    }
?>

</body>
<script>
document.getElementById("defaultOpen").click();

function loadDoc() {
  
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("NewB").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}

function loadDoc1() {
  
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("NewB").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info1.txt", true);
  xhttp.send();
}
</script>
</html>