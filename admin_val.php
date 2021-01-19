<?php
include("connection/connection.php");



#$result=query($connection,$insert);


if(isset($_POST['button']))
	{
    session_start();  
    $name=$_POST["name"];
	$password=$_POST["password"];
	$select="SELECT * FROM admin where name='$name' and password='$password'";
	$result=($connection->query($select));
	$row=mysqli_num_rows($result);

		if($row!=0)
			{

					$_SESSION['name']=$name; 
					if(isset($_POST['rememberadmin']))
				{
					setcookie("adminemail", $name, time() + (86400*30), "/");
					setcookie("adminpassword", $password, time() + (60*5), "/");
					
				}
   				 header('location:admin.php'); 
			   }
		else {
			echo "Admin Not Found";
		}
	}

	else{
			echo "tried it";
	}

?>