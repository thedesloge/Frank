<?php
/*
    Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<div class="row">
    <?php
        $addEndTag = true;
        $the_query = new WP_Query('post_type=rs_portfolio');
        while( $the_query->have_posts()):
            $the_query->the_post();
    ?>
    <?php if($the_query->current_post % 4 == 0){ ?>
        <div class="row">
    <?php } ?>
        
        <div class="three columns">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('three-up-thumbnail'); ?>
            </a>
            <h5><?php echo get_the_title(); ?></h5>
        </div>
        
        
    <?php if($the_query->current_post % 3 == 0 && $the_query->current_post != 0){  $addEndTag = false;?>
        </div>
    <?php } else {
        $addEndTag = true;
    }?>
    
    <?php      
        endwhile;
    ?>
    <?php if($addEndTag){
        echo '</div>';
    }?>
    
</div>

<?php  get_footer(); ?>