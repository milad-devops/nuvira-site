<?php
/* Template Name: Front Page */
get_header(); ?>

<section class="hero">
  <div class="container hero-grid">
    <div class="hero-left" style="z-index:2">
      <h1 class="neon-title">I build resilient infrastructure & pipelines</h1>
      <p class="lead">DevOps engineer focusing on infrastructure as code, CI/CD, observability and cloud automation.</p>

      <div class="graphics-row">
        <div class="graphic-pill glass">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/network-diagram.svg'); ?>
          <div>
            <strong>Distributed Systems</strong>
            <div class="muted">Kubernetes, clusters, service mesh</div>
          </div>
        </div>

        <div class="graphic-pill glass">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/server-rack.svg'); ?>
          <div>
            <strong>Scalable Platforms</strong>
            <div class="muted">Auto-scaling & observability</div>
          </div>
        </div>
      </div>

      <div class="cta-row" style="margin-top:18px">
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/portfolio')); ?>">View Portfolio</a>
        <a class="btn btn-ghost" href="<?php echo esc_url(home_url('/contact')); ?>">Contact Me</a>
      </div>
    </div>

    <div class="hero-right">
      <div class="avatar-3d card-3d glass" aria-hidden="true">
        <?php echo file_get_contents(get_template_directory() . '/assets/images/avatar.svg'); ?>
        <div class="avatar-bands"></div>
      </div>
    </div>
  </div>

  <!-- SVG Network lines -->
  <div class="svg-network" aria-hidden="true">
    <?php echo file_get_contents(get_template_directory() . '/assets/images/animated-lines.svg'); ?>
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

      <div class="timeline glass" style="margin-top:18px">
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
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <article class="project-card card-3d glass">
        <div class="project-media">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/placeholder-' . ($i % 3 === 0 ? '3' : ($i % 2 ? '1' : '2')) . '.svg'); ?>
        </div>
        <div class="project-body" style="padding:16px">
          <h4>Project <?php echo $i; ?></h4>
          <p class="muted">Automated deployment pipelines and multi-region failover, monitoring and cost savings.</p>
          <div class="tags" style="margin-top:8px">
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
