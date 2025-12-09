<?php
/* Template Name: Front Page */
get_header(); ?>

<section class="hero">
  <div class="container hero-grid">
    <div class="hero-left">
      <h1 class="neon-title">I build resilient infrastructure & pipelines</h1>
      <p class="lead">DevOps engineer focusing on infrastructure as code, CI/CD, observability and cloud automation.</p>
      <div class="cta-row">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/portfolio')); ?>">View Portfolio</a>
        <a class="btn btn-ghost" href="<?php echo esc_url(home_url('/contact')); ?>">Contact Me</a>
      </div>
    </div>

    <div class="hero-right">
      <div class="avatar-3d card-3d">
        <?php echo file_get_contents(get_template_directory() . '/assets/images/avatar.svg'); ?>
        <div class="avatar-bands"></div>
      </div>
    </div>
  </div>

  <!-- SVG Network lines -->
  <div class="svg-network">
    <svg viewBox="0 0 800 200" preserveAspectRatio="none" aria-hidden="true">
      <defs>
        <linearGradient id="g1" x1="0" x2="1">
          <stop offset="0%" stop-color="#7cfffb"/>
          <stop offset="100%" stop-color="#7a5cff"/>
        </linearGradient>
      </defs>
      <path class="network-line" d="M10 160 C150 20, 300 180, 390 80 C510 0, 650 120, 790 40" stroke="url(#g1)" stroke-width="2" fill="none"/>
      <g class="nodes">
        <circle cx="10" cy="160" r="4" fill="#7cfffb"></circle>
        <circle cx="390" cy="80" r="4" fill="#7a5cff"></circle>
        <circle cx="790" cy="40" r="4" fill="#9dffb3"></circle>
      </g>
    </svg>
  </div>
</section>

<section class="about container">
  <div class="about-grid">
    <div class="about-left glass">
      <h2>About Me</h2>
      <p class="muted large">I help teams go from manual to automated — building pipelines, secure clusters, and reliable deployments. I focus on observable systems, CI/CD, IaC, and cost-optimized cloud architecture.</p>
      <ul class="feature-list">
        <li><i data-icon="cpu"></i> Infrastructure as Code (Terraform, Pulumi)</li>
        <li><i data-icon="git-pull-request"></i> CI/CD (GitHub Actions, GitLab CI)</li>
        <li><i data-icon="cloud"></i> Cloud (AWS, GCP)</li>
      </ul>
    </div>

    <div class="about-right">
      <div class="skills glass">
        <h3>Skills</h3>
        <div class="skill">
          <label>CI/CD Automation</label>
          <div class="progress"><div class="progress-bar" data-value="92"></div></div>
        </div>
        <div class="skill">
          <label>Infrastructure as Code</label>
          <div class="progress"><div class="progress-bar" data-value="88"></div></div>
        </div>
        <div class="skill">
          <label>Observability</label>
          <div class="progress"><div class="progress-bar" data-value="78"></div></div>
        </div>
      </div>

      <div class="timeline glass">
        <h3>Timeline</h3>
        <ol class="timeline-list">
          <li><strong>2024</strong> Senior DevOps Engineer — Cloud migrations & IaC</li>
          <li><strong>2021</strong> Built platform CI/CD for microservices</li>
          <li><strong>2018</strong> Site reliability & automation</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="portfolio container">
  <header class="section-head">
    <h2>Portfolio</h2>
    <p class="muted">Selected projects & case studies</p>
  </header>

  <div class="cards-grid">
    <?php for ($i = 1; $i <= 3; $i++): ?>
      <article class="project-card card-3d glass">
        <div class="project-media">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/placeholder-' . ($i % 2 ? '1' : '2') . '.svg'); ?>
        </div>
        <div class="project-body">
          <h4>Project <?php echo $i; ?></h4>
          <p class="muted">Automated deployment pipelines and multi-region failover</p>
          <div class="tags">
            <span>Terraform</span><span>GitHub Actions</span>
          </div>
        </div>
      </article>
    <?php endfor; ?>
  </div>
  <div class="center">
    <a class="btn btn-outline" href="<?php echo esc_url(home_url('/portfolio')); ?>">See All Projects</a>
  </div>
</section>

<?php get_footer(); ?>
