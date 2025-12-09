<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section id="contact" class="contact">
            <div class="container">
                <h2 class="section-title">Contact Me</h2>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
