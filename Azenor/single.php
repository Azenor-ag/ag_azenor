<?php get_header(); ?>
<main class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-content">
	  <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>