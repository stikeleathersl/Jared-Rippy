<?php 
	// The basic loop
	while ( have_posts() ) : the_post(); ?>

<div class="column">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 
			// Use this hook to do things above below the page title
			notesblog_above_page_title_single();
		?>
		<?php edit_post_link( __( 'Edit', 'notesblog' ), '<div class="entry-meta">', '</div>' ); ?>
		<div class="entry-content">
		    <?php the_content(); ?>
		    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'notesblog' ), 'after' => '</div>' ) ); ?>
		</div>
	</div>
</div>

<?php 
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