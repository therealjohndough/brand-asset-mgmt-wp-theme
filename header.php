<?php
if (!defined('ABSPATH')) { exit; }
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link" href="#main"><?php esc_html_e('Skip to content', 'csl-cannabis'); ?></a>
<header class="site-header" role="banner">
  <div class="container">
    <div class="brand">
      <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
      <p class="site-tagline"><?php bloginfo('description'); ?></p>
    </div>
    <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary', 'csl-cannabis'); ?>">
      <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'fallback_cb' => '__return_false']); ?>
    </nav>
  </div>
</header>
<main id="main" class="site-main" role="main">
