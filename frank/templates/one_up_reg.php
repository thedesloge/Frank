<?php
/*
	Template Name: One Up (Regular)
*/
?>
<div class='row content oneup'>
	<div class='nav content-header'>
		<span class='label'><?php print($GLOBALS["title"]); ?></span>
		<span class='caption'><?php print($GLOBALS["caption"]) ?></span> <span class='more'><?php next_posts_link('View more&hellip;'); ?></span> 
		
	</div>
	<div class='contents'>
	<?php $queryObject = $GLOBALS["queryObject"]; ?>
<?php while ( $queryObject->have_posts() ) : $queryObject->the_post(); ?>

<article itemscope itemtype="http://schema.org/BlogPosting">
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<section>
		<?php if (!empty($post->post_excerpt)) : ?>
		<p><?php echo get_the_excerpt(); ?> <span class='more-link'><a href="<?php the_permalink(); ?>">Read On&hellip;</a></span></p>
		<?php else : ?>
		<?php the_content('Read On&hellip;'); ?>
		<?php endif; ?>
	</section>
	<footer>
		<ul class='metadata horizontal clearfix'>
			<li class='date'><time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished"><?php the_time(get_option('date_format')); ?></time></li>
			<li class='author'>By <?php the_author_link(); ?></li>
			<li>Filed Under <?php the_category(', '); ?></li>											
			<li class='comments'><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
		</ul>
	</footer>
</article>	

<?php endwhile; ?>
	</div>
</div>