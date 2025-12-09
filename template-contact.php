<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="contact container">
  <header class="section-head"><h2>Contact Me</h2><p class="muted">Let's talk about your next project</p></header>

  <div class="contact-grid">
    <div class="contact-left glass">
      <h3>Get in touch</h3>
      <p class="muted">Prefer email? <a href="mailto:hello@example.com">hello@example.com</a></p>
      <ul class="contact-list">
        <li><i data-icon="mail"></i> hello@example.com</li>
        <li><i data-icon="github"></i> <a href="https://github.com/milad-devops">milad-devops</a></li>
        <li><i data-icon="slack"></i> @milad</li>
      </ul>
    </div>

    <div class="contact-right glass">
      <form class="contact-form" method="post" action="#">
        <label>Name<input type="text" name="name" required></label>
        <label>Email<input type="email" name="email" required></label>
        <label>Message<textarea name="message" rows="6" required></textarea></label>
        <div class="form-row">
          <button class="btn btn-primary" type="submit">Send Message</button>
          <button class="btn btn-ghost" type="reset">Reset</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
