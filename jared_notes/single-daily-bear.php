<?php get_header(); ?>

	<div id="content" class="widecolumn">
		<?php
			// Look for loop-single-daily-bear.php, fallback to loop.php
			get_template_part( 'loop', 'single-daily-bear' );
		?>
	</div>

<?php get_footer(); ?>