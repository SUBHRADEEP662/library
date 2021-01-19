<?php
 
 session_start();
 $useremail = $userpassword = $adminemail = $adminpassword = "";
 if(isset($_COOKIE['useremail'])){
    $useremail = $_COOKIE['useremail'];
    $userpassword = $_COOKIE['userpassword'];
 }
 if(isset($_COOKIE['adminemail'])){
    $adminemail = $_COOKIE['adminemail'];
    $adminpassword = $_COOKIE['adminpassword'];
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/pop-up.css">
   
	
    <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

	<script>
    

    
    </script>
    

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off" style="background-color: rgb(241, 195, 134);">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand"><img style="width: 60px; height: 70px;" src="img/nav logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>

                                    <li><a href="books.php">Upcoming Books</a></li>
                                    <li><a href="#">Catagory</a>
                                        <ul class="dropdown">
                                            <li><a href="horror.php">Horror Books</a></li>
                                            <li><a href="hist.php">Historical books</a></li>
                                            <li><a href="comic.php">Comic Books</a></li>
                                            <li><a href="drama.php">Drama Books</a></li>
                                            <li><a href="bengali.php">Bengali Books</a></li>
                                            <li><a href="Hindi.php">Hindi</a></li>
                                            <li><a href="thriller.php">Thriller</a></li>
                                            <li><a href="novel.php">Novel</a></li>
                                        </ul>
                                    </li>
                                    
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                    <li>
                                    <?php
if(isset($_SESSION['email']))
{ ?>
<b> <a href="free_books.php"> Books for Sell </a> </b>
<?php   }
?>
</li>
<li>
    <?php
if(isset($_SESSION['email']))
{ ?>
<?php
                                        chdir("cart");
                                        chdir($_SESSION['email']);
                                        $x=getcwd();
                                        $y=scandir($x);
                                        $c=0;
                                        foreach($y as $k=>$v)
                                        {
                                            $c=$c+1;
                                        }
                                        $n=$c-2;
                                        chdir("../");
                                        chdir("../");
                                        ?>
                                    <li> <a href="cart.php" target="_blank">cart[<?php echo $n; ?>]</a> </li>
<?php   }
?>
</li>                                    <!-- <li> <a href="free_books.php">Free Books</a> </li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            
                              </form>

                            <!-- Admin 
                            <div>
                            <a href="" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user" aria-hidden="true"></i></a>
                        
                        </div>-->
                        <a onclick="document.getElementById('id01').style.display='block'" style="padding-right: 30px;"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!--Subscrib Video -->
                            <?php
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
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    
     <!-- ##### Breadcrumb Area Start ##### -->
     <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/Font.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Home &nbsp Library</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
   

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap" style="background-color:rgb(194, 252, 176);">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/4.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php if(isset($_SESSION['email']))
                    {  ?>
                        <a href="free_books.php" class="post-title">Syed Mujtaba Ali Rachana Somogro 1st part
                        </a>
                    <?php
                    }
                    else {  ?>
                        <a href="subscribe.php" class="post-title">Syed Mujtaba Ali Rachana Somogro 1st part
                        </a>

                    <?php }
                    ?>  
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/5.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php if(isset($_SESSION['email']))
                    {  ?>
                        <a href="free_books.php" class="post-title">Agatha Christie Bangla Books
                        </a>
                    <?php
                    }
                    else {  ?>
                        <a href="subscribe.php" class="post-title">Agatha Christie Bangla Books
                        </a>

                    <?php }
                    ?> 
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/6.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php if(isset($_SESSION['email']))
                    {  ?>
                        <a href="free_books.php" class="post-title">Byomkesh Bakshi Samagra
                        </a>
                    <?php
                    }
                    else {  ?>
                        <a href="subscribe.php" class="post-title">Byomkesh Bakshi Samagra
                        </a>

                    <?php }
                    ?> 
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/7.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php if(isset($_SESSION['email']))
                    {  ?>
                        <a href="free_books.php" class="post-title">Believe By Glynis Rankin
                        </a>
                    <?php
                    }
                    else {  ?>
                        <a href="subscribe.php" class="post-title">Believe By Glynis Rankin
                        </a>

                    <?php }
                    ?> 
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/8.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php if(isset($_SESSION['email']))
                    {  ?>
                        <a href="free_books.php" class="post-title">My Bestfriend
                        </a>
                    <?php
                    }
                    else {  ?>
                        <a href="subscribe.php" class="post-title">My Bestfriend
                        </a>

                    <?php }
                    ?> 
                       
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="subscribe.php" class="add-img"><img src="img/bg-img/add4.jpg" alt="" ></a>
                
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Latest Books</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Aj Ami Kothao Jabo Na.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">Aj Ami Kothao Jabo Na By Humayun Ahmed (হুমায়ূন আহমেদ)</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">Aj Ami Kothao Jabo Na By Humayun Ahmed (হুমায়ূন আহমেদ)</a>

                        <?php }
                        ?>
                       
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/abc.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">BORO-DIDI By Sarat Chandra Chattopadhyay</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">BORO-DIDI By Sarat Chandra Chattopadhyay</a>

                        <?php }
                        ?>
                       
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Galpo 101 Satyajit Ray.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">Satyajit Ray Books</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">Satyajit Ray Books</a>

                        <?php }
                        ?>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/Upendrakishore Ray Chowdhury Books.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">TUNTUNIR_BOI By Upendrakishore Ray Chowdhury Books</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">TUNTUNIR_BOI By Upendrakishore Ray Chowdhury Books</a>

                        <?php }
                        ?>
                        
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/satyajit-ray-feluda-image.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">Feluda(Part1) By Satyajit Ray</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">Feluda(Part1) By Satyajit Ray</a>

                        <?php }
                        ?>
                        
                    </div>
                </div>
                 <!-- Single Blog Post -->
                 <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/satyajit-ray-feluda-image.jpg" alt="">
                    </div>
                    <div class="post-content">
                    <?php  if(isset($_SESSION['email']))
                                {        ?>
                        <a href="free_books.php" class="post-title">Feluda(Part2) By Satyajit Ray</a>
                                <?php }
                        else { ?>
                            <a href="subscribe.php" class="post-title">Feluda(Part2) By Satyajit Ray</a>

                        <?php }
                        ?>
                        
                    </div>
                </div>

            </div>
        </div>
        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/19.png" alt="">
                        
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Thriller</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Thriller</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/23.jpg" alt="">
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Horror</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Horror</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/301.png" alt="">
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Adventure</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Adventure</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
                         </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/m.png" alt="">
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Adventure</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Adventure</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/n.png" alt="">
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Fairy Tale</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Fairy Tale</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
 
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/12.jpg" alt="">
                        <div class="post-content">
                        <?php if(!isset($_SESSION['email']))
                        { ?>
                            <a href="subscribe.php" class="post-cata">Romance</a>
                            <a href="subscribe.php" class="#">
                            <?php 
                            }
                            else { ?>
                                <a href="free_books.php" class="post-cata">Romance</a>
                            <a href="free_books.php" class="#">
                            <?php }?>
                                <span class="read-style">Explore</span></a>
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Featured Books</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                        <?php
                                        if(isset($_SESSION['email']))
                                        { ?>
                                                <a href="free_books.php" class="#"><img src="img/bg-img/coverpic3d.png" alt="">
                                        <a href="free_books.php"></a>
                                        <?php }
                                        else { ?>
                                            <a href="subscribe.php" class="#"><img src="img/bg-img/coverpic3d.png" alt="">
                                        <a href="subscribe.php"></a>
                                        <?php }
                                        ?>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                            
                                    </div>
                                    <?php
                                    if(isset($_SESSION['email']))
                                    { ?>
                                        <a href="free_books.php" class="post-title">Murder on the Orient Express</a>
                                    <?php }
                                    else { ?>
                                        <a href="subscribe.php" class="post-title">Murder on the Orient Express</a>
                                    <?php }
                                    ?>
                                    <p>Murder on the Orient Express is a detective novel by British writer Agatha Christie featuring the Belgian detective Hercule Poirot</p>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 9068</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 1339</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 338</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">The Daughter By C.B Cooper</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">The Daughter By C.B Cooper</a>
                                            <?php }
                                            ?>
                                          
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">Engaged to a vampire</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">Engaged to a vampire</a>
                                            <?php }
                                            ?>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">The Lost Hero</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">The Lost Hero</a>
                                            <?php }
                                            ?>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">Left Behind</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">Left Behind</a>
                                            <?php }
                                            ?>
                                           
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.png" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">Prejudice</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">Prejudice</a>
                                            <?php }
                                            ?>
                                            
                                        </div>
                                    </div>
                                     <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add5.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">The Adventures Of Sherlock Holmes</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">The Adventures Of Sherlock Holmes</a>
                                            <?php }
                                            ?>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add4.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">An Uncollected Death</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">An Uncollected Death</a>
                                            <?php }
                                            ?>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/160.png" alt="">
                                            </div>
                                            <div class="post-content">
                                            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">Calypso</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">Calypso</a>
                                            <?php }
                                            ?>
                                              
                                            </div>
                                        </div>
                                </div>

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">The Daughter By C.B Cooper</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">The Daughter By C.B Cooper</a>
                                            <?php }
                                            ?>
                                          
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">Engaged to a vampire</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">Engaged to a vampire</a>
                                            <?php }
                                            ?>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                        <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php" class="post-title">The Lost Hero</a>
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php" class="post-title">The Lost Hero</a>
                                            <?php }
                                            ?>
                                            
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="subscribe.php" class="post-title">Left Behind</a>
                                           
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.png" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="subscribe.php" class="post-title">Pride and Prejudice</a>
                                           
                                        </div>
                                    </div>
                                    
                                     <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add5.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="subscribe.php" class="post-title">The Adventures Of Sherlock Holmes</a>
                                              
                                            </div>
                                        </div>
                                           <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/add4.jpg" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="subscribe.php" class="post-title">An Uncollected Death</a>
                                              
                                            </div>
                                        </div>
                                         <!-- Single Blog Post -->
                                     <div class="single-blog-post d-flex style-3">
                                            <div class="post-thumbnail">
                                                <img src="img/bg-img/160.png" alt="">
                                            </div>
                                            <div class="post-content">
                                                <a href="subscribe.php" class="post-title">Calypso</a>
                                              
                                            </div>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Viewed Books</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/13.jpg" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Arranged By Katy Wong</a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/157.png" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Throne Of Glass</a>
                            
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/30.png" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Destined Love</a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/158.png" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">EMMA(Part-I) By JANE AUSTEN
                                    </a>
                           
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/156.jpg" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">juliet-rose-rain-on-my-wings</a>
                            
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/159.jpg" alt="">
                            <a href="#" class="#">
                            <span class="video-duration">Explore</span></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">LITTLE WOMEN BY LOUISA M. ALCOTT</a>
                           
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Novel</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                                <a href="#" class="add-img"><img src="img/bg-img/59.jpg" alt="">
                            
                            <a href="subscribe.php" class="#">
                                <span class="read-styl">Explore</span></a> 
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                
                                <a href="#">Novel</a>
                            </div>
                            <a href="subscribe.php" class="#">Peter and Wendy by James Mathew Barrie</a>
                            <p>Peter and Wendy is a fantasy novel by James Mathew Barrie. It is believed that this story was conceived by the author in his mother’s ever loving memory of his elder brother who died at the age of 13. Hence in his mother’s mind the boy never grown up. A boy who enjoys his childhood and unwilling to transform himself to adulthood is the theme behind this fiction story. Peter Pan, the lead character loves to listen to bedtime stories and lives in a Neverland, a fictitious island along with other boys.

                                    One day he invites her sister Wendy to his Neverland and asks her to be mother of the boys. They build a house for Wendy which is attacked by pirates. In an earlier incident Peter has won the heart of Indians, who help him later combating against the pirates. This novel is later transformed to a Oedipus like complex developed by Wendy who loves Peter, however Peter always wish, Wendy to be his mother only.</p>         
                        </div>
                       
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            
                            <a href="#" class="add-img">
                                <img src="img/bg-img/60.jpg" alt="">
                            
                            <a href="#" class="#">
                                <span class="read-styl">Explore</span></a>                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                              
                                <a href="#">Novel</a>
                            </div>
                            <a href="#" class="post-title">The Wonderful Wizard of Oz by Lyman Frank Baum</a>
                            <p>	
                                    The Wonderful Wizard of Oz is a fantasy novel by Lyman Frank Baum. A cyclone carries away the farm house of a young girl and accidentally kills an evil ruler. To return home, the girl has to reach and kill the evil ruler of emerald city. Armed with her magical shoes, she travels in an adventurous path along with three other similar characters who also in her same situation. The wizard of OZ which appears differently to each person helps her to kill the evil ruler. 

                                    This adventure packed fantasy story is narrated with many peculiar characters and their good and bad parts. On their way to emerald city all the four travellers Dorothy, Scarecrow, Tin Woodman and Cowardly lion faces challenging situations and comes out of the challenges with flying colors. While the evil ruler is projected as a strong personality, Ironically Dorothy ends up killing the evil ruler with a pot of water and melts her down.
                                </p>
                        </div>
                            </div>
                        
                    

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                           
                            <a href="#" class="add-img"> <img src="img/bg-img/65.jpg" alt="">

                            <a href="#" class="#">
                                <span class="read-styl">Explore</span></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                
                                <a href="#">Novel</a>
                            </div>
                            <a href="#" class="post-title">The Call Of The Wild by Jack London</a>
                            <p>	
                                    The Call Of The Wild is a novel by Jack London based on the Darwin’s theory; Survival of the fittest. A dog which is nurtured as pet, unearths the wolf inside it, when exposed to brutal and cruel treatments under harsh circumstances. The story is set in the frozen Canadian Klondike gold rush during 1890s. Central character of this story revolves around Buck, a domesticated dog. 

                                    Stolen to compensate the gambling debts of the gardener, Buck is sold to the gambling club. The club sells him to Canadian dispatchers and ultimately moved to a Klondike region with extreme climatic conditions where it learns to survive the cold winter. In a rivalry with Spitz, Buck wins and emerges as the leader of the team.</p>             </div>
                       
                    </div>
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Ionshaker By  Felix Timoty</a>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Obsessed By Alicyn Night</a>
                              
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/33.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">(Un)lucky Number thirteen</a>
                               
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/34.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">The Secret Of The House On Dead-End Lane </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Popular Categories</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thriller</span> <span>15</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Suspense</span> <span>30</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fairytale</span> <span>13</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Novel</span> <span>06</span></a></li>
                    
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add5.jpg" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Top Rated</h5>
                </div>



                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <a href="#"><img src="img/bg-img/150.jpg" alt=""></a>
                    </div>
                    <div class="youtube-channel-content">
                        <a href="#" class="channel-title">Just Friend</a>
                        <a href="#" class="btn subscribe-btn">Explore</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="#"><img src="img/bg-img/151.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="#" class="channel-title">Fairy-Struck</a>
                            <a href="#" class="btn subscribe-btn">Explore</a>
                        </div>
                    </div>
    
                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="#"><img src="img/bg-img/152.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="#" class="channel-title">Undercover Soldier Part One</a>
                            <a href="#" class="btn subscribe-btn">Explore</a>
                        </div>
                    </div>
    

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="#"><img src="img/bg-img/156.jpg" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="#" class="channel-title">juliet-rose-rain-on-my-wings</a>
                            <a href="#" class="btn subscribe-btn">Explore</a>
                        </div>
                    </div>
    

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="#"><img src="img/bg-img/160.png" alt=""></a>
                        </div>
                        <div class="youtube-channel-content">
                            <a href="#" class="channel-title">Calypso By S. G. Ricketts</a>
                            <a href="#" class="btn subscribe-btn">Explore</a>
                        </div>
                    </div>
     <!-- Single YouTube Channel -->
     <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                    <a href="subscribe.php"><img src="img/bg-img/add4.jpg" alt=""></a>
                </div>
                <div class="youtube-channel-content">
                    <a href="subscribe.php" class="channel-title">An Uncollected Death</a>
                    <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                </div>
            </div>
             <!-- Single YouTube Channel -->
             <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                            <a href="subscribe.php"><img src="img/bg-img/add5.jpg" alt=""></a>
                           
                        </div>
                        <div class="youtube-channel-content">
                            <a href="subscribe.php" class="channel-title">The Adventures Of Sherlock Holmes</a>
                            <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                        </div>
                    </div>
                     <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="subscribe.php"><img src="img/bg-img/171.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="subscribe.php" class="channel-title">Cave Man</a>
                                <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="subscribe.php"><img src="img/bg-img/165.png" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="subscribe.php" class="channel-title">Hamlet By William Shakespeare</a>
                                <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="subscribe.php"><img src="img/bg-img/170.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="subscribe.php" class="channel-title">book name</a>
                                <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="subscribe.php"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="subscribe.php" class="channel-title">book name</a>
                                <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                            </div>
                        </div>

                         <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                        <div class="youtube-channel-thumbnail">
                                <a href="subscribe.php"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>
                            <div class="youtube-channel-content">
                                <a href="subscribe.php" class="channel-title">book name</a>
                                <a href="subscribe.php" class="btn subscribe-btn">Explore</a>
                            </div>
                        </div>

            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter and get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                    <!-- <a href="index.php" class="nav-brand"><img style="width: 60px; height: 70px;" src="img/nav_logo.png" alt=""></a> -->
                        <a href="index.php" class="foo-logo"><img src="img/core-img/logo2.png" alt="" width="60px" height="70px"></a>
                        <p>“A great book should leave you with many experiences, and slightly exhausted at the end. You live several lives while reading.” <br>
― William Styron, Conversations with William Styron</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Horror Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Historical Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Comic Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Drama Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fairytale Books</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Suspense</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Thriller</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Novel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Romance</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Romance Books</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="subscribe.php" class="post-title">A Howl In The Night</a>
                                
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="subscribe.php" class="post-title">
                                    Arranged BY Katy Wong
                                    </a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Books</h6>
                        <ul class="footer-tags" title="coming soon">
                            <li><a href="subscribe.php">Aranyak</a></li>
                            <li><a href="subscribe.php">Moon Mountain</a></li>
                            <li><a href="subscribe.php">Gora</a></li>
                            <li><a href="subscribe.php">Sanchaita</a></li>
                            <li><a href="subscribe.php">The Home And The World</a></li>
                            <li><a href="subscribe.php">Emma(Part-I)</a></li>
                            <li><a href="subscribe.php">Choker Bali</a></li>
                            <li><a href="subscribe.php">Walden</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

<!-- Admin popup-->





<div id="id01" class="modal">
    <div class="row">
        <div class="col-sm-6"  style="padding-left: 50px;">
             <form class="modal-content animate" action="admin_val.php" method="post">
    <div class="imgcontainer">
      
      <h1>Admin login here</h1>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username" name="name" value="<?php echo $adminemail; ?>" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $adminpassword; ?>" required>
        
      <button type="submit" name="button">Login</button>
      
      <label>
        <input type="checkbox" name="rememberadmin"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>   
   </div>
   <div class="col-sm-6"  style="padding-right: 50px;">
        <form class="modal-content animate" action="user_val.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h1>User login here</h1>
      
    </div>

    <div class="container">
      <label for="psw"><b>Email</b></label><br>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $useremail; ?>" required>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $userpassword; ?>" required><br>
        
      <button type="submit" name="button">Login</button>
      <label><input type="checkbox" name="rememberuser"> Remember me</label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>   </div>
        </div>
    </div>
        
 
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>


<?php

// echo $adminemail;
// echo $adminpassword;

?>