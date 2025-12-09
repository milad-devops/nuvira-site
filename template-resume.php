<?php
/*
Template Name: Resume / Timeline
*/
get_header(); ?>

<section class="resume container">
  <header class="section-head"><h2>Resume</h2><p class="muted">Experience & timeline</p></header>

  <div class="resume-grid">
    <div class="resume-left glass">
      <div class="avatar-large"><?php echo file_get_contents(get_template_directory() . '/assets/images/avatar.svg'); ?></div>
      <h3>Milad DevOps</h3>
      <p class="muted">Senior DevOps Engineer</p>
    </div>

    <div class="resume-right">
      <div class="timeline-vertical">
        <div class="timeline-item">
          <div class="time">2024 — Present</div>
          <div class="content">
            <h4>Senior DevOps Engineer</h4>
            <p>Led cloud migration and platform engineering.</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="time">2021 — 2024</div>
          <div class="content">
            <h4>Platform Engineer</h4>
            <p>Designed CI/CD and automation for microservices.</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="time">2018 — 2021</div>
          <div class="content">
            <h4>Site Reliability</h4>
            <p>Implemented monitoring and incident response.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
