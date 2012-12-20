<?php
/**
 * @package WordPress
 * @subpackage Frank
 */
?>
</div>
<div id="page_bottom" class="clearfix">
	<footer id='page_footer' class='container'>
		<div class="row">	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
			
		<?php endif; ?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
<?php if(frank_devmode()) : ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/frank.slideshow.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simplebox.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>	
<?php else : ?>
	<script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/somerandomdude.js"></script>
<?php endif; ?>	

</body>
</html>
<!--<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.-->