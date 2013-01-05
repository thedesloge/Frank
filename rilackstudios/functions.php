<?php

add_action('init', 'create_post_type');
function create_post_type() {
	register_post_type( 'rs_portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio Posts' ),
				'singular_name' => __( 'Portfolio Post' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		    )
		)
	);
}

function orbit_slideshow_func( $atts , $content=null){
    $rand = rand(1, 11);
    return "<div id='orbit_{$rand}'>"
		.$content
	    ."</div>"
	    ."<script type='text/javascript'>\n"
		."$(window).load(function() {\n"
		."$('#orbit_{$rand}').orbit();\n"
	    ."});"
	    ."</script>";
}
add_shortcode('orbit', 'orbit_slideshow_func');
?>