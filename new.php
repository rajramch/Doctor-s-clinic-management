
 <?php
 
   $host="localhost";
   $dbuser="id1493254_rajramchandani";
   $pass="Swift123!";
   $dbname="id1493254_doctordb";
   $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
   if(mysqli_connect_errno())
   {
	   die("connection failed !".mysqli_connect_error());
	   
   }
	       if(isset($_POST['submit']))
		    {
			$user=$_POST['user'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$pass=$_POST['pwd'];
			$age=$_POST['age'];			
            $repass=$_POST['repwd'];
                if(empty($user)||empty($email)||empty($age)||empty($gender)||empty($pass)||
				empty($repass))
				{
					echo "oops! can't leave any field blank";
				}
				elseif($pass!=$repass)
				{
					echo "password didn't match!please try again.";
				}
				else
				{
					$sql = "INSERT INTO patient(user,email,Age,Gender,Password)".
					       "VALUES('$user','$email','$age','$gender','$pass')";
				    $res=mysqli_query($conn,$sql);
					if(!$res)
					{
						die("query failed!". mysqli_error($conn));
					}
				else
				{
						
					 $message = "your account is created";
                    echo "<script type='text/javascript'>alert('$message');
                           </script>";
						 session_start();
						 $_SESSION['user'] = $user;
				         header("Location:booking.php");
					
				}
				}
			}
			else
			{
				echo "form not submitted properly !";
			}
		?>