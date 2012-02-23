 <nav role="navigation">
  <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
    <div class="container-fluid">
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </a>
     <a class="brand" href="/"><?php echo get_site_option('site_name');?></a>
     <div class="nav-collapse">
      <ul class="nav">
       <li class="active"><a href="#home">Home</a></li>
       <li><a href="/people/">People</a></li>
       <li><a href="/test/">Test</a></li>
      </ul>
      <p class="navbar-text pull-right">
       <?php if ( is_user_logged_in() ) 
        {global $current_user;get_currentuserinfo();echo '<a href="/wp-admin/">' . $current_user->display_name . '</a>';}
       ?>
      </p>
     </div>
    </div>
   </div>
  </div>
 </nav>