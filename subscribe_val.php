<?php
session_start();
// error_reporting(0);
include("connection/connection.php");


$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$pack= $_POST['pack'];
$password= $_POST['password'];



$select="SELECT * FROM user where email='$email'";
$insert="INSERT INTO user SET  name='$name', email='$email', mobile='$mobile', pack='$pack', password='$password';";
$result=($connection->query($select));
$row=mysqli_num_rows($result);
if($row>0)

{
   echo "user already exits!!(Email-id already taken)";
    
}
    else
{
     if($connection->query($insert))
     {
      $_SESSION['email']=$email;

      chdir("cart");
      $x=$_SESSION['email'];
      mkdir("$x");
      chdir("../");


        
      if(isset($_POST['rememberuser']))
          {
              setcookie("useremail", $email, time() + (86400*30), "/");
              setcookie("userpassword", $password, time() + (86400*30), "/");
              
          }


          header('Location: index.php');  




    //   require 'mailer/PHPMailerAutoload.php';

    //   $mail = new PHPMailer;                            
      
    //   $mail->IsSMTP();      
    //   $mail->SMTPAuth = true;     
    //   $mail->Host = 'tls://smtp.gmail.com:587';  
    //   $mail->isHTML();     
    //   $mail->Username = 'subhradeephalder999@gmail.com';                 
    //   $mail->Password = 'Password00012345';                           
                          
                                         
      
    //   $mail->setFrom('subhradeephalder999@gmail.com', 'Subhradeep Halder');
         
                                       
      
    //   $mail->Subject = 'Thank You for Subscription';
    //   $mail->Body    = 'Stay tuned with our site to get latest books<br>---- From E-library';
    //   $mail->addAddress($email);  
      
    //   if(!$mail->send()) {
    //       echo 'Message could not be sent.';
    //       echo 'Mailer Error: ' . $mail->ErrorInfo;
    //   } else {
    //       echo 'Message has been sent';



          



    //   
    //   }


  

     }
     else {
        echo "Error"." ".mysqli_error($connection);
     }
         
} 

?>