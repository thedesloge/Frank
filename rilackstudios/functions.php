<?php
function foobar_func($atts){
    return "foo and bars";
}
add_shortcode('foobar', 'foobar_func');

// [bartag foo="foo-value"]
function bartag_func( $atts ) {
	extract( shortcode_atts( array(
		'foo' => 'something',
		'bar' => 'something else',
	), $atts ) );

	return "foo = {$foo} and bar = {$bar}";
}
add_shortcode( 'bartag', 'bartag_func' );

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