<footer class="site__footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		<?php 
	        get_template_part( 'modale', get_post_format() ); ?>
			<?php 
	        get_template_part( 'animation', get_post_format() ); ?>
</footer>
<?php wp_footer(); ?>

</body>
</html>
