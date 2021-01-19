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
    <title>Drama Books</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

	<script>
    

    
    </script>
    

</head>

<body style="background-color:rgb(194, 252, 176);">
    <!-- Preloader -->
    

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
                                    <li><a href="archive.php">Books</a></li>
                                    <li><a href="#">Category</a>
                                        <ul class="dropdown">
                                            <li><a href="horror.php">Horror Books</a></li>
                                            <li><a href="hist.php">Historical books</a></li>
                                            <li><a href="comic.php">Comic Books</a></li>
                                            <li><a href="drama.php">Drama Books</a></li>
                                            <li><a href="bengali.php">Bengali Books</a></li>
                                            <li><a href="hindi.php">Hindi</a></li>
                                            <li><a href="Thriller.php">Thriller</a></li>
                                            <li><a href="novel.php">Novel</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="#">Trending</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="horror.php"><b>Horror Books :-</a></li></b>
                                                <li><a href="archive.php">I am Behind</a></li>
                                                <li><a href="video-post.php">Sleep Over</a></li>
                                                <li><a href="single-post.php">The Mine</a></li>
                                                <li><a href="about.php">The Face at the Window</a></li>
                                                <li><a href="contact.php">Maya Villa </a></li>
                                                <li><a href="login.php">Taranath Trantrick</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="drama.php"><b>Drama Books:-</a></li></b>
                                                <li><a href="archive.php">The Way to Steel (SAMPLE)</a></li>
                                                <li><a href="video-post.php">The Other Woman's Man</a></li>
                                                <li><a href="single-post.php">Desperate</a></li>
                                                <l<div class="preloader d-flex align-items-center justify-content-center">
                                                    <div class="spinner">
                                                        <div class="double-bounce1"></div>
                                                        <div class="double-bounce2"></div>
                                                    </div>
                                                
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
                                            
                                        </div>
                                    </li> -->
                                    <li><a href="about.php">About</a></li>
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
</li>
                                    <!-- <li> <a href="free_books.php">Free Books</a> </li> -->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <!-- <div class="search">
                            <form action="" method="get">
                                <input class="btn" list="books" name="books" id="topSearch" placeholder="Search">
                                <datalist id="books">
                                  <option value="Search By Author ">
                                  <option value="Search By Books ">
                                 
                                </datalist>
                            </div>
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form> -->

                            <!-- Admin -->
                            <div>
                            <!-- <a href="login.php" class="login-btn" data-toggle="modal" id="admin"><i class="fa fa-user" aria-hidden="true"></i></a> -->
                        
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
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/drama00.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Drama Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="section-heading">
        <h5>Drama Books</h5>
    </div>
 
    <div class="container"><br>
        <div class="row align-items-start">
          <div class="col">
            <img style="height: 390px;" src="img/drama1.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama2.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama3.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama4.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
        </div><br><br>

        <div class="row align-items-center">
          <div class="col">
            <img style="height: 390px;" src="img/drama5.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama6.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama7.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama8.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
        </div><br><br>

        <div class="row align-items-end">
          <div class="col">
            <img style="height: 390px;" src="img/drama9.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama10.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama11.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
          <div class="col">
            <img style="height: 390px;" src="img/drama12.png" alt="">
            <?php
                        if (isset($_SESSION['email'])) { ?>
                            <form>
                                <input type="button" value="Coming Soon" class="btn btn-info mx-auto d-block" title="Currently Unavailable">
                            </form>
                       <?php }
                       else { ?>
                           <a href="subscribe.php" class="btn btn-info mx-5 d-block">Explore</a>
                      <?php }
                    ?>
          </div>
        </div>
        <!-- <nav>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
            </ul>
        </nav> -->
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