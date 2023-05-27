<?php get_header(); ?>
 	<h1 class="reussites">Les projets réalisées</h1>
	<main class="pro">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<article class="post">
			<h2><?php the_title(); ?></h2>
        	<?php the_post_thumbnail(); ?>
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
            </p>
      		<?php the_excerpt(); ?> 
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>
		<?php endwhile; endif; ?>
	</main>
<?php get_footer(); ?>