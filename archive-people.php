<?php get_header();?>

<?php $posts = query_posts($query_string .'&orderby=title&order=asc');?>

<div class="row-fluid">
   <div class="span12">
    <div class="hero-unit shadow">
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

<div class="span12">
 <a class="btn" href="../" title = "All">All</a>
 <?php 
  $cat = get_query_var('cat');
  foreach(get_categories('parent=0') as $category)
  {echo '<a class="btn" href="'.get_bloginfo('url')."/" . $category->slug . '/">' . $category->name.'</a> ';}
 ?>
</div>

<hr>

<ul class="thumbnails span12">
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>
  <li>
   <a href="<?php the_permalink()?>" class="thumbnail shadow">
    <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('thumbnail',array('title' => ''));?><?php } else { ?><img src="http://placehold.it/150x150"><?php } ?>         
    <p><?php the_title();?></p> 
  </a>
  </li>     
 <?php endwhile; ?>
<?php endif; ?>
</ul>
</div><!--/row-fluid-->

<?php get_footer();?>