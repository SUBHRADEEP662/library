<?php

include("connection/connection.php");

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
// echo $name.$email.$message;
$sql="INSERT INTO contact SET name='$name', email='$email', message='$message'";
$connection->query($sql);
echo "<h3>Your query is taken, Thank You</h3>"

?>