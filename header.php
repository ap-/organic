<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Organic</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="">
 <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/custom.css" rel="stylesheet">
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
 <header role="banner" class="hidden">
  <h1><?php echo get_site_option('site_name');?></h1>
 </header>
<<<<<<< HEAD
 <nav role="navigation">
  <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
    <div class="container-fluid">
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>
     <a class="brand" href="#"><?php echo get_site_option('site_name');?></a>
     <div class="nav-collapse">
      <ul class="nav">
       <li class="active"><a href="#home">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      </ul>
      <p class="navbar-text pull-right">
       <?php if ( is_user_logged_in() ) 
        {global $current_user;get_currentuserinfo();echo '<a href="/wp-admin/">' . $current_user->display_name . '</a>';}
       ?>
      </p>
     </div>
    </div>
   </div>
  </div>
 </nav>
=======
 <?php get_template_part('navigation');?>
>>>>>>> separate navigation into own file
<div class="container-fluid">