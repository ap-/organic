<!doctype html>
<?php $iExcerpt = get_the_excerpt(); $tags = array("<p>", "</p>"); $iExcerpt = str_replace($tags, "", $iExcerpt); ?>
<?php global $iSiteName; $iSiteName = get_site_option('site_name'); ?>
<?php global $iBlogName; $iBlogName = get_bloginfo('name'); ?>
<?php global $iBlogPath; $iBlogPath = str_replace('/','',$GLOBALS['path']);?>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title><?php echo $iSiteName;?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="<?php if(is_single()) { echo $iExcerpt;; ?><?php } ?><?php echo get_post_meta($post->ID, "meta.description", true); ?>">
 <meta name="author" content="">
 <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/custom.css" rel="stylesheet">
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body <?php body_class($class); ?>>
 <header role="banner" class="hidden">
  <h1><?php echo get_site_option('site_name');?></h1>
 </header>
 <?php get_template_part('navigation');?>
<div class="container-fluid">