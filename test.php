<?php


session_start();
if(!(isset($_SESSION['email'])))
{
   ?>
   <a href="subscribe.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Subscribe</span></a>
<?php  }
else { ?>
   <b><?php echo $_SESSION['email']; ?> </b>
<a href="logout.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text"> LogOut </span></a>
<?php   }



?>