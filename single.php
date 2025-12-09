<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="single-post container">
    <header class="post-header">
      <h1><?php the_title(); ?></h1>
      <div class="meta muted"><?php the_time('F j, Y'); ?> • <?php the_author(); ?></div>
    </header>

    <div class="post-content glass">
      <?php the_content(); ?>
    </div>

    <footer class="post-footer">
      <div class="share muted">
        <span>Share</span>
        <a href="#" aria-label="Share on Twitter"><i data-icon="twitter"></i></a>
      </div>
    </footer>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
