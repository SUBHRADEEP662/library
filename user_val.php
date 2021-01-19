<?php
include("connection/connection.php");


#$result=query($connection,$insert);


if(isset($_POST['button']))
	{
    session_start();  
	$email=$_POST["email"];
	$password=$_POST["password"];
	$select="SELECT * FROM user where email='$email' and password='$password'";
	$result=($connection->query($select));
	$row=mysqli_num_rows($result);

		if($row!=0)
			{

				$_SESSION['email']=$email; 
				if(isset($_POST['rememberuser']))
				{
					setcookie("useremail", $email, time() + (86400*30), "/");
					setcookie("userpassword", $password, time() + (60*5), "/");
					
				}
				
   				header('location: index.php'); 
			}
			   else{
				echo "User Not Found";
		}
	}
?>