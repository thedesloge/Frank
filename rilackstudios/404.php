<?php
/**
 * @package WordPress
 * @subpackage Frank
 */
?>
<?php get_header(); ?>
<div id="content" class="fullspread fourohfour">
	<div id="content_primary" class='row'>
		<header>
			<h1>Page Not Found</h1>
		</header>
		<div class='main row'>
				<div class="six columns">
					<p class='default-message large'>Unfortunately, the page you are looking for no longer exists or never existed in the first place. If you reached this page in error, you can go <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">home</a> and start over.</p>
				</div>
				<div class="six columns search">
					<p class='large'>If you believe this page exists, please try searching for the page in the search input below.</p>
					<?php get_search_form(); ?>
				</div>
			</div>
	</div>
</div>
<?php get_footer(); ?>