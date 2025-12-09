</main><!-- .site-content -->
<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-left">
      <div class="logo-glow small">Nuvira</div>
      <p class="muted">© <?php echo date('Y'); ?> Nuvira — DevOps & Cloud</p>
    </div>
    <div class="footer-right">
      <nav class="footer-nav">
        <?php
        // show same menu if exists
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'menu footer-menu',
              'depth' => 1
            ));
        }
        ?>
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
