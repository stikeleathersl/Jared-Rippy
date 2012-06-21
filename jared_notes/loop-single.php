<?php 
	// The basic loop
	while ( have_posts() ) : the_post();

	// Use this hook to do things between above the post
	notesblog_above_post();
?>
<div class="column">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 
			// Use this hook to do things above below the post title
			notesblog_above_post_title_single();
		?>
   		<?php 
			// Use this hook to do things above below the post title
			notesblog_below_post_title_single();
		?>
        <!-- seperate title and text from post to seperate div -->
		<div class="entry-content">
		
		<?php
		  ob_start();
		  the_content('Read the full post',true);
		  $postOutput = preg_replace('/<img[^>]+./','', ob_get_contents());
		  ob_end_clean();
		  echo $postOutput;
		  ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'notesblog' ), 'after' => '</div>' ) ); ?>
          
          <!-- add firm_credit custom field -->
          <?php $credittext = get_post_meta($post->ID, 'firm_credit', $single = true);
		  		if ($credittext !== '') { ?>
          			<p span class="firmcredit"><?php echo $credittext; ?></p>
          		<?php } ?>
		</div>
        
         <!-- seperate image from post to seperate div -->
        <div class="content-img">
		  <?php
		  preg_match_all("/(<img [^>]*>)/",get_the_content(),$matches,PREG_PATTERN_ORDER);
		  for( $i=0; isset($matches[1]) && $i < count($matches[1]); $i++ ) {
			echo $beforeEachImage . $matches[1][$i] . $afterEachImage;}?>
		</div>
	</div>
</div>
	
	<?php
	    // Use this hook to do things below the post
	    notesblog_below_post();
	
	// End the loop
endwhile; ?>


<div class="thumbscolumn">
<?php rewind_posts();
	// thumbnail menu
	query_posts('');

	while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="home-thumbnail" >
	<?php if ( has_post_format( 'aside' ) ) { ?>
	    <div class="format-aside-permalink">
	    	<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">&para;</a>
	    </div>
	    <?php the_content(); ?>
	<?php } else { ?>
    	<!--home page thumbnails-->
        <div>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<?php the_post_thumbnail(); ?>
			</a>
        </div>
    
		<?php			
		} ?>
	</div>
<?php 
	// End the loop
endwhile; ?>
</div>