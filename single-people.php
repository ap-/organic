<div class="span3">
<div class="accordion" id="accordion-categories">
<?php
$activepost=$post->ID;
$cat_args=array('orderby'=>'name','order' => 'ASC');
$categories=get_categories($cat_args);
  foreach($categories as $category) { 
    $args=array('category__in' => array($category->term_id),'caller_get_posts'=>1,'showposts'=>100,'orderby'=>'title','order'=>'asc','numberposts' => 100);
    $posts=get_posts($args);
      if ($posts) {
        echo '<div class="sidebar-nav shadow">';
        echo '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-categories" href="#collapse-' . $category->slug . '">' . $category->name.'</a></div>';
        echo '<div id="collapse-' . $category->slug . '" class="accordion-body collapse in"><div class="accordion-inner">';
        echo '<ul class="nav nav-list">';
        foreach($posts as $post) {
          setup_postdata($post); ?>
          <li<?php if ($activepost==$post->ID) {echo ' class="active"';}?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
        } // foreach($posts
      } // if ($posts
    echo '</ul></div></div></div></div>';
    } // foreach($categories
?>
</div><!--accordion-->
</div>


