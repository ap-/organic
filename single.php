<?php $iBlogPath = str_replace('/','',$GLOBALS['path']);?>
<?php get_header(); ?>
 <?php get_template_part('single',$iBlogPath);?>
<?php get_footer(); ?>