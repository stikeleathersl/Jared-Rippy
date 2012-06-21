<div class="thumbscolumn">
<?php 
	// The basic loop
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