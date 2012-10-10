<?php get_header();?>

<div class="row-fluid">

<div class="span9">
 <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
   <article role ="main" <?php post_class(); ?>>
    <header class="hero-unit shadow">
      <hgroup>
       <h1><?php the_title();?></h1>
       <h3><em><?php echo get_post_meta($post->ID, "book.tagline", true); ?></em></h3>
       <p><?php the_excerpt();?></p>
      </hgroup>
     </header>

    <div class="row-fluid">
     <div class="span4">
      <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('large',array('class' => 'shadow'));?><?php } else { ?><img src="http://placehold.it/300x300" class="shadow"><?php } ?>
       <br/><small class="caption"><?php echo get_post_meta($post->ID, "book.publisher", true); ?> <?php echo get_post_meta($post->ID, "book.ISBN", true); ?><br/><br/></small>
      <blockquote cite="/">
       <p><?php echo get_post_meta($post->ID, "book.dedication", true); ?></p>
       <small><?php echo get_post_meta($post->ID, "book.author", true); ?></small>
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
<?php get_template_part('sidebar','general');?>
</div><!--/span-->

</div><!--/row-fluid-->


<?php get_footer();?>