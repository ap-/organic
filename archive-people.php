<?php get_header();?>

<?php $posts = query_posts($query_string .'&orderby=title&order=asc');?>

<div class="row-fluid">
   <div class="span12">
    <div class="hero-unit shadow">
     <header>
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
    </div><!--/hero-->
   </div>
</div>

<div class="row-fluid">

<div class="span12">
 <?php if (single_cat_title("", false)==$category->name) {$customclass='btn btn-inverse';} else {$customclass='btn';} ;?>
 <a class="<?php echo $customclass?>" href="<?php echo get_bloginfo('url')?>">All</a>
 <?php 
  $cat = get_query_var('cat');
  foreach(get_categories('parent=0') as $category)
  { if (single_cat_title("", false)==$category->name) {$customclass='btn btn-inverse';} else {$customclass='btn';} ;
   echo '<a class="' . $customclass . '" href="'.get_bloginfo('url')."/" . $category->slug . '/">' . $category->name.'</a> ';}
 ?>
</div>

<hr>

<article <?php post_class(); ?>>
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
</article>
</div><!--/row-fluid-->

<?php get_footer();?>