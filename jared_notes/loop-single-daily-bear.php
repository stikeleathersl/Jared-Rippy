<?php 
	// The basic loop
	while ( have_posts() ) : the_post();

	// Use this hook to do things between above the post
	notesblog_above_post();
?>

<div class="column">

	<?php // Use this hook to do things between above the post
	notesblog_above_post(); ?>
    
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h2><?php the_title(); ?></h2>
        
        <div class="bear_date"><?php the_time( __( 'M j, Y', 'notesblog' ) ); ?></div>
		
        <div class="bear_image"><?php the_content(); ?></div>
        
        <div class="social_links">
			<?php dynamic_sidebar('posts-right-column'); ?>
        </div>
        
    </div>
        
	<?php
	    // Use this hook to do things below the post
	    notesblog_below_post(); ?>
		
</div>
	
	
	<?php // End the loop
endwhile; ?>