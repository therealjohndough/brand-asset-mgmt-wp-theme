<?php
/**
 * Theme bootstrap
 *
 * @package csl-cannabis
 */

if (!defined('ABSPATH')) { exit; }

/**
 * Setup
 */
add_action('after_setup_theme', function() {
  load_theme_textdomain('csl-cannabis', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['style', 'script', 'search-form', 'gallery', 'caption', 'navigation-widgets']);

  register_nav_menus([
    'primary' => __('Primary Menu', 'csl-cannabis'),
    'footer'  => __('Footer Menu', 'csl-cannabis'),
  ]);
});

/**
 * Enqueue
 */
add_action('wp_enqueue_scripts', function() {
  $ver = '1.0.1';
  wp_enqueue_style('csl-cannabis-theme', get_template_directory_uri() . '/assets/css/theme.css', [], $ver, 'all');
});

/**
 * Customizer: market selector for disclaimers
 */
add_action('customize_register', function($wp_customize){
  $wp_customize->add_section('csl_cannabis', [
    'title' => __('Cannabis Compliance', 'csl-cannabis'),
    'priority' => 30,
  ]);

  $wp_customize->add_setting('csl_market', [
    'default' => 'NY',
    'sanitize_callback' => function($val){
      $val = strtoupper(sanitize_text_field($val));
      $allowed = ['NY','CA','MA','NJ','Other'];
      return in_array($val, $allowed, true) ? $val : 'Other';
    },
    'transport' => 'refresh',
  ]);

  $wp_customize->add_control('csl_market', [
    'label' => __('Market / State for disclaimers', 'csl-cannabis'),
    'section' => 'csl_cannabis',
    'type' => 'select',
    'choices' => [
      'NY' => __('New York', 'csl-cannabis'),
      'CA' => __('California', 'csl-cannabis'),
      'MA' => __('Massachusetts', 'csl-cannabis'),
      'NJ' => __('New Jersey', 'csl-cannabis'),
      'Other' => __('Other / Generic', 'csl-cannabis'),
    ]
  ]);
});

require_once get_template_directory() . '/inc/compliance.php';

/**
 * Footer disclaimer output
 */
add_action('wp_footer', function(){
  if (is_user_logged_in() && current_user_can('manage_options')) {
    // admins can toggle the market quickly via Customizer.
  }
  echo '<div class="csl-disclaimer-wrap" aria-live="polite">';
  echo '<p class="csl-disclaimer" role="note">' . esc_html(csl_get_disclaimer(get_theme_mod('csl_market', 'NY'))) . '</p>';
  echo '</div>';
});

/**
 * Simple promo expiry helper
 * Usage: add attribute csl-expire="YYYY-MM-DD" to any element; it will be hidden after that date.
 */
add_action('wp_footer', function(){ ?>
<script>
(function(){
  var nodes = document.querySelectorAll('[csl-expire]');
  var today = new Date();
  for (var i=0;i<nodes.length;i++){
    var d = new Date(nodes[i].getAttribute('csl-expire'));
    if (!isNaN(d) && today > d) { nodes[i].style.display = 'none'; }
  }
})();
</script>
<?php });

/**
 * Utilities
 */
function csl_get_theme_version(){
  $theme = wp_get_theme();
  return $theme->get('Version') ?: '1.0.1';
}
