<?php get_header();?>

<div class="row-fluid">
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>
  <div class="span9">
   <article role ="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="hero-unit">
     <header>
      <hgroup>
       <h1><?php the_title();?></h1>
       <h2><?php the_excerpt();?></h2>
      </hgroup>
     </header>
    </div><!--/hero-->
    <div class="row-fluid">
     <div class="span4">
      <span class="pull-right">
       <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('large',array('class' => ''));?><?php } else { ?><img src="http://placehold.it/500x700" alt=""><?php } ?>	      
      </span>
      <blockquote cite="/" class="pull-right">
       <p><?php echo get_post_meta($post->ID, "person.quote", true); ?></p>
       <small><?php the_title();?>, <?php echo get_post_meta($post->ID, "person.year.birth", true); ?>-<?php echo get_post_meta($post->ID, "person.year.death", true); ?></small>
      </blockquote>
     </div><!--/span-->
     <div class="span8">
      <p><?php the_content();?></p>
     </div><!--/span-->
    </div><!--/row-fluid-->
    <footer></footer>
   </article>
  </div><!--/span-->
 <?php endwhile; ?>
<?php endif; ?>

<?php $activepost=$post->ID;?>

<nav role="navigation">
 <div class="span3">
  <div class="well sidebar-nav">
   <ul class="nav nav-list">
    <li class="nav-header">People</li>
    <?php
     global $post; $args = array('orderby'=>'title','order'=>'asc','numberposts' => 100); $myposts = get_posts( $args );
     foreach( $myposts as $post ) :	setup_postdata($post); ?>
     <li <?php if ($activepost==$post->ID) {echo 'class="active"';}?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
   </ul>
  </div><!--/.well -->
 </div><!--/span-->
</nav>

</div><!--/row-fluid-->


<?php get_footer();?>