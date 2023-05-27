<?php

get_header();
?>

	<header>
		<h1><?php esc_html_e( 'page non trouvée','Azenor' ); ?></h1>
	</header>

	<div >
		<div>
		<img class="boussoule" src="<?php echo get_template_directory_uri(); ?>./picture/pexels-valentin-antonucci-691637.jpg" alt="boussole">
			<p><?php esc_html_e( 'Oups! Vous avez rencontré un problème? signalez-le nous' ); ?></p>
			<?php echo home_url()?>
		</div>
	</div>

<?php
get_footer();
?>