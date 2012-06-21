<?php get_header(); ?>
	
	<div id="content" class="widecolumn">
		<?php
			// Look for loop-page.php, fallback to loop.php
			get_template_part( 'loop', 'page' );
		?>
	</div>

<?php get_footer(); ?>