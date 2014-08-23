<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
     </button>
      <li><a class="brand" href="/"><?php echo get_site_option('site_name');?></a></li>
    </div>


     <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       <li class="active"><a href="/">Home</a></li>
       <li><a href="/people/">People</a></li>
       <li><a href="/books/">Books</a></li>
       <li><a href="/additives/">Additives</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
       <li>
        <?php if ( is_user_logged_in() ) 
         {global $current_user;get_currentuserinfo();echo '<a href="/wp-admin/">' . $current_user->display_name . '</a>';}
        ?>
       </li>
      </ul>

     </div>
   </div>
 </nav>
 