<?php get_header(); ?>

	<div id="content" class="widecolumn">
		<?php
			// Look for loop-home.php, fallback to loop.php
			get_template_part( 'loop', 'home' );
		?>
	</div>

<?php get_footer(); ?>