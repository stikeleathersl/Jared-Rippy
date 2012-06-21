		<?php
		    // Use this hook to do things above the footer
		    notesblog_above_footer();

		    // The widgets are in sidebar-footer.php
		    get_sidebar('footer');
		?>
			
		</div><!-- /#blog -->
		
		<div id="copy">
		    <div class="fullcolumn left">
		    	<p>Copyright &copy; <?php bloginfo('name'); ?><br /><em><?php bloginfo('description'); ?></em></p>
		    </div>
		</div>
		
	</div></div>

</div>

<?php
    // Use this hook to do things below the site
    notesblog_below_site();
    
    // WordPress ends
    wp_footer();
?>
</body>
</html>