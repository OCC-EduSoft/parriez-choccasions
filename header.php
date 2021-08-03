<?php
session_start();
$pages = array(
    'index.php' => 'Home',
    'services.php' => 'Our Services',
    'aboutus.php' => 'About',
    'gallery.php' => 'Gallery',
    'menu.php' => 'Menu',
    'blog.php' => 'Blog',
    'contact.php' => 'Contact',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>Parriez-Choccasions |
      <?php 
      $i=0; 
      foreach($pages as $filename => $pageTitle) {
      if ($filename == $currentPage)
      {
        $i=1;
        echo htmlspecialchars($pageTitle);
      }   
      
      }
      if($i!=1)
        echo "Home";
      ?>
      </title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Font files -->
      <link href="https://fonts.googleapis.com/css?family=Satisfy:400,400i,700,700i%7CNunito:300,400,700" rel="stylesheet">
      <link href="fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
      <link href="fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
      <!-- <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon"> -->
      <link href="img/fav.jpg" rel="icon">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="css/plugins.css" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="styles/maincolors.css" rel="stylesheet">
      <!-- LayerSlider CSS -->
      <link rel="stylesheet" href="vendor/layerslider/css/layerslider.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- Prefix free -->
      <script src="js/prefixfree.min.js"></script>
	</head>
   <!-- ==== body starts ==== -->
   <body id="top">
     <!-- Preloader -->
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- ===== Page Content ===== -->
      <div class="container-fluid">
         <!-- ===== Sidebar starts ===== -->
         <div id="sidebar" class="split col-md-2">
            <div class="affix-sidebar col-md-12">
               <div class="sidebar-nav">
                  <div class="navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                        <!-- collapse button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <div class="brand">
                           <a href="index.php">
                           <img src="img/logo.png" alt="" class="img-responsive center-block" >
                           </a>
                        </div>
                        <!-- /brand -->
                     </div>
                     <!-- /navbar-header  -->
                     <div class="navbar-collapse collapse sidebar-navbar-collapse ">
                        <ul class="nav navbar-nav" id="sidenav01">
                          <!--  <li class="active"><a href="index.php">Home</a></li>
                           <li><a href="services.php">Our Services</a></li>
                           <li><a href="aboutus.php">About Us</a></li>
                           <li><a href="gallery.php">Gallery</a></li>
                           <li><a href="menu.php">Menu</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="blog.php">Blog Home</a></li>
                                 <li><a href="blog-single.php">Blog Single</a></li>
                                 <li><a href="elements.php">Elements page</a></li>
                              </ul>
                           </li> -->
                           <?php foreach ($pages as $filename => $pageTitle) {
                                        if ($filename == $currentPage) { ?>
                                    <li class="nav-item active">
                                        <a class="active" href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a>
                                    </li>
                                    <?php } else {?>
                                    <li class="nav-item">
                                         <a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a>
                                    </li>
                                    
                                <?php }
                                    }?>
                        </ul>
                        <!-- navbar-nav -->
                     </div>
                     <!--/.nav-collapse -->
                  </div>
                  <!--/navbar -->
               </div>
               <!--/sidebar-nav -->
               <div class="navbar-info hidden-sm hidden-xs hidden-md">
                  <p class="small-text"><i class="fas fa-map-marker-alt margin-icon"></i>5929, Green Avenue Lane, DLF Phase IV, Gurgaon 122009</p>
                  <p class="small-text"><i class="fas fa-phone-alt margin-icon"></i>Tamanna +91 9953359003</p>
                  <p class="small-text"><i class="fas fa-phone-alt margin-icon"></i>Praveen +91 9810116837</p>
                  <p class="small-text"><i class="far fa-clock margin-icon"></i>Mon-Sat: 9am-5pm</p>
                  <!--Social icons -->
                  <div class="social-media ">
                     <a href="mailto:contact@parriez.com" title=""><i class="fas fa-envelope"></i></a>
                     <a href="#" title=""><i class="fab fa-whatsapp"></i></a>
                     <a href="#" title=""><i class="fab fa-twitter"></i></a>
                     <a href="#" title=""><i class="fab fa-facebook"></i></a>
                     <a href="#" title=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
               <!-- /navbar-info -->
            </div>
            <!-- /affix-sidebar  -->
         </div>
         <!-- ===== / sidebar ends =====