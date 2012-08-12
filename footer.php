<hr>
<footer role="contentinfo" class="pull-right">
 <small><p>© 2012 <?php echo get_site_option('site_name');?></p></small>
</footer>
</div><!--/container-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.masonry.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.imagesloaded.min.js"></script>
<script>
var $container = $('#iMasonary');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.iMasonaryItems'
  });
});
</script>

</body>
</html>