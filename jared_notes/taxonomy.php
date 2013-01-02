<?php get_header(); ?>
	
	<div id="content" class="widecolumn">
		<?php
			// Look for loop-taxonomy.php, fallback to loop.php
			get_template_part( 'loop', 'taxonomy' );
		?>
	</div>

<?php get_footer(); ?>