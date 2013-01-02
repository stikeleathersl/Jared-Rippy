<div class="column">

<!-- bears nav / RSS -->
<div class="bear_nav">
	<div id="bears-archive"><?php wp_nav_menu(array('theme_location' => 'bear-archive')); ?></div>
	<?php dynamic_sidebar('archives-right-column'); ?>
</div>


	<?php 
	// Old posts on top - query by taxonomy term
	if ( has_term('january', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'january', 'order' => 'ASC' ) );
	}
	else if ( has_term('february', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'february', 'order' => 'ASC' ) );
	}
	else if ( has_term('march', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'march', 'order' => 'ASC' ) );
	}
	else if ( has_term('april', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'april', 'order' => 'ASC' ) );
	}
	else if ( has_term('may', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'may', 'order' => 'ASC' ) );
	}
	else if ( has_term('june', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'june', 'order' => 'ASC' ) );
	}
	else if ( has_term('july', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'july', 'order' => 'ASC' ) );
	}
	else if ( has_term('august', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'august', 'order' => 'ASC' ) );
	}
	else if ( has_term('september', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'september', 'order' => 'ASC' ) );
	}
	else if ( has_term('october', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'october', 'order' => 'ASC' ) );
	}
	else if ( has_term('november', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'november', 'order' => 'ASC' ) );
	}
	else if ( has_term('december', 'month')) {
		query_posts( array( 'post_type' => 'daily-bear', 'month' => 'december', 'order' => 'ASC' ) );
	}
	
	// the basic loop
	while (have_posts() ) : the_post();

	// Use this hook to do things between above the post
	notesblog_above_post(); ?>
    
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            
            <div class="bear_date"><?php the_time( __( 'M j, Y', 'notesblog' ) ); ?></div>
            
            <div class="bear_image"><?php the_content(); ?></div>
            
        </div>
         
	 <?php // Use this hook to do things below the post
	 notesblog_below_post(); ?>
	
	<?php // End the loop
	endwhile;
    wp_reset_query(); ?>
    
  

</div>