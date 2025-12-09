<?php
/*
Template Name: Portfolio
*/
get_header(); ?>

<section class="hero" aria-hidden="false">
  <div class="container hero-grid">
    <div class="hero-left" style="z-index:2">
      <h1 class="neon-title">Portfolio</h1>
      <p class="lead">Case studies, projects and platform work — select a case to read more.</p>
      <div class="cta-row" style="margin-top:16px">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">Work With Me</a>
        <a class="btn btn-ghost" href="<?php echo esc_url(home_url('/about-me')); ?>">About Me</a>
      </div>
    </div>

    <div class="hero-right">
      <div class="avatar-3d card-3d glass">
        <?php echo file_get_contents(get_template_directory() . '/assets/images/server-rack.svg'); ?>
      </div>
    </div>
  </div>
</section>

<section class="portfolio container">
  <header class="section-head">
    <h2>Projects</h2>
    <p class="muted">A larger selection of projects with images and short descriptions.</p>
  </header>

  <div class="cards-grid">
    <?php for ($i=1; $i<=8; $i++): ?>
      <article class="project-card card-3d glass">
        <div class="project-media">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/placeholder-' . ($i % 3 === 0 ? '3' : ($i % 2 ? '1' : '2')) . '.svg'); ?>
        </div>
        <div class="project-body" style="padding:16px">
          <h4>Project <?php echo $i; ?></h4>
          <p class="muted">Short description of the work & measurable results.</p>
          <a class="btn btn-sm" href="#">Read Case</a>
        </div>
      </article>
    <?php endfor; ?>
  </div>
</section>

<?php get_footer(); ?>
