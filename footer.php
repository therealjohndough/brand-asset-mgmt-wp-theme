<?php if (!defined('ABSPATH')) { exit; } ?>
</main>
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <nav class="footer-nav" aria-label="<?php esc_attr_e('Footer', 'csl-cannabis'); ?>">
      <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'fallback_cb' => '__return_false']); ?>
    </nav>
    <p class="copyright">&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
