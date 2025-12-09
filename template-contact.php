<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="hero">
  <div class="container hero-grid">
    <div class="hero-left" style="z-index:2">
      <h1 class="neon-title">Contact Me</h1>
      <p class="lead">Let’s talk about your infrastructure, platform or DevOps needs.</p>
      <div class="graphics-row" style="margin-top:12px">
        <div class="graphic-pill glass">
          <i data-icon="mail"></i>
          <div>
            <strong>Email</strong>
            <div class="muted">hello@example.com</div>
          </div>
        </div>
        <div class="graphic-pill glass">
          <i data-icon="github"></i>
          <div>
            <strong>Code</strong>
            <div class="muted">github.com/milad-devops</div>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <div class="avatar-3d card-3d glass" aria-hidden="true">
        <?php echo file_get_contents(get_template_directory() . '/assets/images/avatar.svg'); ?>
      </div>
    </div>
  </div>
</section>

<section class="contact container">
  <header class="section-head"><h2>Send a message</h2><p class="muted">I’ll respond as soon as possible</p></header>

  <div class="contact-grid" style="display:grid;grid-template-columns:1fr 480px;gap:20px">
    <div class="contact-left glass">
      <h3>Direct contact</h3>
      <p class="muted">Prefer email? <a href="mailto:hello@example.com">hello@example.com</a></p>
      <ul class="contact-list">
        <li><i data-icon="mail"></i> hello@example.com</li>
        <li><i data-icon="github"></i> <a href="https://github.com/milad-devops">milad-devops</a></li>
        <li><i data-icon="slack"></i> @milad</li>
      </ul>
      <div style="margin-top:18px">
        <h4>Availability</h4>
        <p class="muted">Open for freelance & remote engagements.</p>
      </div>
    </div>

    <div class="contact-right glass">
      <form class="contact-form" method="post" action="#">
        <label>Name<input type="text" name="name" required></label>
        <label>Email<input type="email" name="email" required></label>
        <label>Message<textarea name="message" rows="8" required></textarea></label>
        <div class="form-row" style="display:flex;gap:10px;margin-top:12px">
          <button class="btn btn-primary" type="submit">Send Message</button>
          <button class="btn btn-ghost" type="reset">Reset</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
