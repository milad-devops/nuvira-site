<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('nuvira-dark-body'); ?>>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <div class="logo-glow">Nuvira</div>
      <span class="tagline">DevOps • Systems • Cloud</span>
    </a>

    <nav class="main-nav" aria-label="Primary Menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu',
        'fallback_cb' => false,
      ));
      ?>
      <button class="mobile-toggle" id="mobileToggle" aria-expanded="false" aria-label="Toggle menu">
        <i data-icon="menu"></i>
      </button>
    </nav>
  </div>
</header>

<main id="site-content" class="site-content">
