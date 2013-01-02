<?php get_header(); ?>

	<div id="content" class="widecolumn">
		<?php
			// Look for loop-archive-daily-bear.php, fallback to loop.php
			get_template_part( 'loop', 'archive-daily-bear' );
		?>
	</div>

<?php get_footer(); ?>