<?php get_header(); ?>

<section class="blog-list container">
  <header class="section-head">
    <h2>Latest from the Blog</h2>
    <p class="muted">Thoughts about infrastructure, automation and system design.</p>
  </header>

  <div class="posts-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
        <a class="post-thumb" href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); else echo file_get_contents(get_template_directory() . '/assets/images/placeholder-1.svg'); ?>
        </a>
        <div class="post-body">
          <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta muted"><?php the_time('M j, Y'); ?> • <?php the_author_posts_link(); ?></div>
          <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
          <a class="read-more" href="<?php the_permalink(); ?>">Read</a>
        </div>
      </article>
    <?php endwhile; else: ?>
      <p>No posts yet. Add some posts to show here.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
