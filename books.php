<?php
session_start();
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
   
	
    <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Upcoming Books</title>

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
                    <a href="index.php" class="nav-brand">
                   <img src="img/core-img/logo2.png" alt="" width="60px" height="70px"></a>

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
                                    <li><a href="books.php">All Books</a></li>
                                    <li><a href="#">Catagory</a>
                                        <ul class="dropdown">
                                            <li><a href="horror.php">Horror Books</a></li>
                                            <li><a href="archive.php">Historical books</a></li>
                                            <li><a href="video-post.php">Comic Books</a></li>
                                            <li><a href="single-post.php">Drama Books</a></li>
                                            <li><a href="about.php">Farytale Books</a></li>
                                            <li><a href="contact.php">Suspense</a></li>
                                            <li><a href="submit-video.php">Thriller</a></li>
                                            <li><a href="login.php">Novel</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="#">Trending</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php"><b>Horror Books :-</a></li></b>
                                                <li><a href="archive.php">I am Behind</a></li>
                                                <li><a href="video-post.php">Sleep Over</a></li>
                                                <li><a href="single-post.php">The Mine</a></li>
                                                <li><a href="about.php">The Face at the Window</a></li>
                                                <li><a href="contact.php">Maya Villa </a></li>
                                                <li><a href="login.php">Taranath Trantrick</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php"><b>Dramma Books:-</a></li></b>
                                                <li><a href="archive.php">The Way to Steel (SAMPLE)</a></li>
                                                <li><a href="video-post.php">The Other Woman's Man</a></li>
                                                <li><a href="single-post.php">Desperate</a></li>
                                                <li><a href="about.php">Sanai</a></li>
                                                <li><a href="contact.php">Nabanna</a></li>
                                                <li><a href="login.php">Aadhe Adhure</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="comic.php"><b>Comic</a></li></b>
                                                <li><a href="archive.php">Archive</a></li>
                                                <li><a href="video-post.php">Single Video Post</a></li>
                                                <li><a href="single-post.php">Single Post</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="login.php">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="thriller.php"><b>Thriller</a></li></b>
                                                <li><a href="archive.php">Hush</a></li>
                                                <li><a href="video-post.php">Obsessed</a></li>
                                                <li><a href="single-post.php">On Emma's Bluff</a></li>
                                                <li><a href="about.php">Bloody Mary</a></li>
                                                <li><a href="contact.php">(un)lucky Number thirteen</a></li>
                                                <li><a href="login.php">Andhari Afat - Suspense Gujarati Story</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <!-- <li> <a href="free_books.php">Free Books</a> </li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- <div class="top-meta-data d-flex align-items-center">
                            Top Search Area
                            <div class="search">
                            <form action="" method="get">
                                <input class="btn" list="books" name="books" id="topSearch" placeholder="Search">
                                <datalist id="books">
                                  <option value="Search By Author ">
                                  <option value="Search By Books ">
                                 
                                </datalist>
                            </div>
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>

                            Admin -->
                            <div> 
                            <a href="" class="login-btn" data-toggle="modal" id="admin"><i class="fa fa-user" aria-hidden="true"></i></a>
                        
                        </div> 
                            <!--Subscrib Video -->
                            <?php


// session_start();
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
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/ComicCov.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>All Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="section-heading">
        <h5>All Books</h5>
    </div>
 
    <div class="container"><br>
        <div class="row align-items-start">
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/coverpic3d.png" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
          </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/23.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
       </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/add4.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
  
          
          </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/156.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
          
          </div>
        </div><br><br>

        <div class="row align-items-center">
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/add5.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
 
                   </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/159.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
 
          
          </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/m.png" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
 
                    </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/151.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
 
                 </div>
        </div><br><br>

        <div class="row align-items-end">
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/31.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
                    </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/12.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
          
          </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/152.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
 
          </div>
          <div class="col">
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?><img style="height: 390px;" src="img/bg-img/60.jpg" alt=""></a>
            <?php
                                            if (isset($_SESSION['email'])) { ?>
                                                <a href="free_books.php">
                                            <?php }
                                            else { ?>
                                                <a href="subscribe.php">
                                            <?php }
                                            ?> <span class="xyz">Explore</span></a>
 
          </div>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="allbooks-page2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="allbooks-page3.php">3</a></li>
                <!-- <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li> -->
            </ul>
        </nav>
      </div><br><br>


    <!-- ##### Breadcrumb Area Start ##### -->
    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
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
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.php" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.php" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
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
</body>

</html>