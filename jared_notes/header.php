<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php wp_enqueue_script('jquery'); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1174" />

<!--thumbnail stagger with masonry-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<title>
	<?php 
		// Print the right title
		if (is_home () ) { 
			bloginfo('name'); 
		} elseif (is_category() || is_tag()) { 
			 bloginfo('name'); echo ' &bull; ' ; single_cat_title(); 
		} elseif (is_single() || is_page()) { 
			bloginfo('name'); echo ' &bull; ' ; single_post_title(); 
		} else { 
			bloginfo('name'); echo ' &bull; ' ; wp_title('',true); 
		}
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	// Comment JavaScript
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	//  Use this hook to insert things into HEAD
	notesblog_inside_head();
	
	// Kick off WordPress
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="site">

	<?php
	    // Use this hook to insert things before the wrap
	    notesblog_above_site();
	?>

	<div id="outer-wrap"><div id="inner-wrap">
		<div id="header">
			<div class="header-widgetarea">
				<ul id="header-widgets">
	    		<?php 
	    		    // Adding the Beside the logo widget area, empty by default
	    		    dynamic_sidebar('beside-the-logo');
	    		?>
	    		</ul>
			</div>
			<?php if (is_home() || is_front_page()) { ?>
				    <a href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name'); ?>">
                      <h1 id="site-header">
				    	<img src="<?php bloginfo('template_url');?>/images/jared_logo.png" />
                      </h1>
				    </a>
			<?php } else { ?>
				    <a href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name'); ?>">
                       <div id="site-header">
				    	<img src="<?php bloginfo('template_url');?>/images/jared_logo.png" />
                     </div>
				    </a>
			<?php } ?>
            <div id="top-navigation"><?php wp_nav_menu(array('theme_location' => 'top-navigation')); ?></div>
		</div>
		<div id="blog">
			
			<?php
				// Use this hook to do things between the menu and the main content
				notesblog_below_menu();
			?><title><?php 		// Print the right title		if (is_home () ) { 			bloginfo('name'); 		} elseif (is_category() || is_tag()) { 			single_cat_title(); echo ' &bull; ' ; bloginfo('name'); 		} elseif (is_single() || is_page()) { 			single_post_title(); } else { wp_title('',true); 		}	?></title>