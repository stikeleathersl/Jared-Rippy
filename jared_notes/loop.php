<?php
	// 404 Page Not Found or empty archives etc.
	if ( !have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title">
			<?php _e( 'Not Found', 'notesblog' ); ?>
		</h1>
		<div class="entry-content">
			<p><?php _e( 'Sorry, there is nothing here. You might want to try and search for whatever it was you were looking for?', 'notesblog' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php endif; ?>

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