<?php get_header();?>

<?php $posts = query_posts($query_string .'&orderby=title&order=asc');?>

<div class="row-fluid">
   <div class="span12">
    <div class="hero-unit">
     <header>
      <hgroup>
       <h1><?php bloginfo('name'); ?></h1>
       <h2><p><?php bloginfo('description'); ?></p></h2>
      </hgroup>
     </header>
    </div><!--/hero-->
   </div>
</div>

<div class="row-fluid">
<ul class="thumbnails span12">
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>
  <li>
   <a href="<?php the_permalink()?>" class="thumbnail">
    <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('thumbnail',array('class' => ''));?><?php } else { ?><img src="http://placehold.it/150x150" alt=""><?php } ?>       
    <p><?php the_title();?></p> 
  </a>
  </li>     
 <?php endwhile; ?>
<?php endif; ?>
</ul>
</div><!--/row-fluid-->

<?php get_footer();?>