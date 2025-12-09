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
                <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Send a Message</h3>
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
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-envelope"></i> hello@example.com</p>
                        <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
