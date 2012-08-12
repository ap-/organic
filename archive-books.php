<?php get_header();?>

<?php $posts = query_posts($query_string .'&orderby=title&order=asc');?>

<div class="row-fluid">

 <header class="hero-unit shadow">
  <hgroup>
   <?php if (is_category())
    {echo '<h1>'; echo single_cat_title(); echo '</h1>'; 
     echo '<h2>'; echo category_description( ); echo '</h2>';}
     else
    {echo '<h1>'; echo bloginfo('name'); echo '</h1>'; 
     echo '<h2><p>'; echo bloginfo('description'); echo '</p></h2>';}
   ?>
  </hgroup>
 </header>

 <nav role="navigation">
  <?php if (single_cat_title("", false)==$category->name) {$customclass='btn btn-inverse';} else {$customclass='btn';} ;?>
  <a class="<?php echo $customclass?>" href="<?php echo get_bloginfo('url')?>">All</a>
  <?php 
   $cat = get_query_var('cat');
   foreach(get_categories('parent=0') as $category)
   { if (single_cat_title("", false)==$category->name) {$customclass='btn btn-inverse';} else {$customclass='btn';} ;
   echo '<a class="' . $customclass . '" href="'.get_bloginfo('url')."/" . $category->slug . '/">' . $category->name.'</a> ';}
  ?>
  <hr>
</nav>

<div id="iMasonary" class="span12">
<ul class="thumbnails">
<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) : the_post(); ?>
  <li>
  <div class="iMasonaryItems">
  <article>
   <a href="<?php the_permalink()?>" class="thumbnail shadow">
    <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('medium',array('title' => ''));?><?php } else { ?><img src="http://placehold.it/200x250"><?php } ?>         
    <p><?php the_title();?></p><em><?php the_excerpt();?></em>
   </a>
  </article>
  </div>
  </li>     
 <?php endwhile; ?>
<?php endif; ?>
</ul>
</div>
    
</div><!--/row-->
<?php get_footer();?>