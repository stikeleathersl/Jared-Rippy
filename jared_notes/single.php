<?php get_header(); ?>

	<div id="content" class="widecolumn">
		<?php
			// Look for loop-single.php, fallback to loop.php
			get_template_part( 'loop', 'single' );
		?>
	</div>

<?php get_footer(); ?>