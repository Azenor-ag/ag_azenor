<?php get_header(); ?>
<h1 class="int">Agence Azenor de conception et d'hébergement de sites web</h1>
<main class="main index">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    	<div class="content">
			<?php the_post_thumbnail()?>
			<div class="art_gauche">
				<h2><?php the_title(); ?></h2>
    			<?php the_excerpt(); ?>
				<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
			</div>
   	 </div>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>