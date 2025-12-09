<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="page container">
    <header class="section-head">
      <h1><?php the_title(); ?></h1>
    </header>
    <div class="page-content glass">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
