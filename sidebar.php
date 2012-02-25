<div class="span3">
 <div class="sidebar-nav shadow">
  <ul class="nav nav-list">
   <li class="nav-header">People</li>
    <?php
     $activepost=$post->ID;
     global $post;
     $args = array('orderby'=>'title','order'=>'asc','numberposts' => 100);
     $myposts = get_posts( $args );
     foreach( $myposts as $post ) : setup_postdata($post); ?>
     <li <?php if ($activepost==$post->ID) {echo 'class="active"';}?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
   <?php endforeach; ?>
  </ul>
 </div>
</div><!--/span-->