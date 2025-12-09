<?php
/*
Template Name: Portfolio
*/
get_header(); ?>

<section class="portfolio container">
  <header class="section-head">
    <h2>Portfolio</h2>
    <p class="muted">Case studies & sample work</p>
  </header>

  <div class="cards-grid">
    <?php for ($i=1; $i<=6; $i++): ?>
      <article class="project-card card-3d glass">
        <div class="project-media">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/placeholder-' . ($i % 2 ? '1' : '2') . '.svg'); ?>
        </div>
        <div class="project-body">
          <h4>Project <?php echo $i; ?></h4>
          <p class="muted">Short description of the work & results.</p>
          <a class="btn btn-sm" href="#">Read Case</a>
        </div>
      </article>
    <?php endfor; ?>
  </div>
</section>

<?php get_footer(); ?>
