<?php get_header();?>

<div class="row-fluid">

<div class="span9">
 <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
   <article role ="main" <?php post_class(); ?>>
    <header class="hero-unit shadow">
      <hgroup>
       <h1><?php the_title();?></h1>
       <h2><?php the_excerpt();?></h2>
      </hgroup>
     </header>

    <div class="row-fluid">
     <div class="span4">
      <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('medium',array('class' => 'shadow'));?><?php } else { ?><img src="http://placehold.it/300x500" class="shadow"><?php } ?>       
      <blockquote cite="/">
       <p><?php echo get_post_meta($post->ID, "person.quote", true); ?></p>
       <small><?php the_title();?>, <?php echo get_post_meta($post->ID, "person.year.birth", true); ?>-<?php echo get_post_meta($post->ID, "person.year.death", true); ?></small>
      </blockquote>
      <aside id="links">
      <?php wp_list_bookmarks('title_li=&categorize=0&category_name='.get_the_title($post->ID)); ?>
      </aside>
     </div><!--/span-->
     <div class="span8 content">
      <p><?php the_content();?></p>
     </div><!--/span-->
    </div><!--/row-fluid-->
    <footer></footer>
   </article>

  <?php endwhile; ?>
 <?php endif; ?>
</div><!--/span-->

<div class="span3">
<?php get_template_part('sidebar','people');?>
</div><!--/span-->

</div><!--/row-fluid-->


<?php get_footer();?>