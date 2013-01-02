<div class="column">

	<?php 
	// The basic loop - sticky posts
	while ( have_posts() ) : the_post(); ?>
    
    <?php $sticky = get_post_meta($post->ID, 'sticky-post', $single = true); ?>
    
    <?php // If this is the sticky descriptor page
		if ($sticky !== '') { ?>
        	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
        		<div class="sticky_post"><?php the_content(); ?></div>
        
    		</div>
    <?php } ?>
	
	 <?php wp_reset_postdata(); 
	 
	 endwhile; ?>


<!-- bears nav / RSS -->
<div class="bear_nav">
	<div id="bears-archive"><?php wp_nav_menu(array('theme_location' => 'bear-archive')); ?></div>
	<?php dynamic_sidebar('archives-right-column'); ?>
</div>


	<?php 
	// The basic loop - not sticky posts, up to 35
	$i = 1; while (have_posts() && $i < 36) : the_post();

	// Use this hook to do things between above the post
	notesblog_above_post(); ?>
    
    <?php $sticky = get_post_meta($post->ID, 'sticky-post', $single = true); ?>
    
    <?php // Regular - not sticky posts
		if ($sticky == '') { ?>
    
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            
            <div class="bear_date"><?php the_time( __( 'M j, Y', 'notesblog' ) ); ?></div>
            
            <div class="bear_image"><?php the_content(); ?></div>
            
        </div>
        
     <?php }	
        
	 // Use this hook to do things below the post
	 notesblog_below_post(); ?>
	
	<?php // End the loop
	
	$i++; endwhile; ?>
    

</div>