<?php
/**
 * Custom front page with sections
 * Edit in the editor or hardcode sections below.
 * @package csl-cannabis
 */
if (!defined('ABSPATH')) { exit; }
get_header();
?>

<section class="hero">
  <div class="container">
    <h1><?php echo esc_html( get_bloginfo('name') ); ?></h1>
    <p class="lead"><?php echo esc_html( get_bloginfo('description') ); ?></p>
    <div class="cta-row">
      <a class="btn" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">
        <?php esc_html_e('Explore Updates', 'csl-cannabis'); ?>
      </a>
      <a class="btn btn-secondary" href="<?php echo esc_url( admin_url('customize.php') ); ?>">
        <?php esc_html_e('Customize Theme', 'csl-cannabis'); ?>
      </a>
    </div>
  </div>
</section>

<section class="features">
  <div class="container grid-3">
    <article class="card">
      <h3><?php esc_html_e('Compliant by Design', 'csl-cannabis'); ?></h3>
      <p><?php esc_html_e('Built-in state-specific disclaimers and accessible patterns.', 'csl-cannabis'); ?></p>
    </article>
    <article class="card">
      <h3><?php esc_html_e('Fast & Minimal', 'csl-cannabis'); ?></h3>
      <p><?php esc_html_e('No heavy frameworks. Clean PHP + a single CSS file.', 'csl-cannabis'); ?></p>
    </article>
    <article class="card">
      <h3><?php esc_html_e('Editor-Friendly', 'csl-cannabis'); ?></h3>
      <p><?php esc_html_e('Use pages and posts as usual. This front page is optional.', 'csl-cannabis'); ?></p>
    </article>
  </div>
</section>

<section class="faq">
  <div class="container">
    <h2><?php esc_html_e('FAQ', 'csl-cannabis'); ?></h2>
    <details>
      <summary><?php esc_html_e('How do I change the disclaimer?', 'csl-cannabis'); ?></summary>
      <p><?php esc_html_e('Go to Appearance → Customize → Cannabis Compliance and pick your market/state.', 'csl-cannabis'); ?></p>
    </details>
    <details>
      <summary><?php esc_html_e('Can I use this as a landing page?', 'csl-cannabis'); ?></summary>
      <p><?php esc_html_e('Yes. Set this file as your Front Page under Settings → Reading.', 'csl-cannabis'); ?></p>
    </details>
  </div>
</section>

<section class="contact">
  <div class="container card">
    <h2><?php esc_html_e('Let’s Work', 'csl-cannabis'); ?></h2>
    <p><?php esc_html_e('Need a bespoke cannabis brand site? We can extend this starter into a full theme or headless build.', 'csl-cannabis'); ?></p>
    <a class="btn" href="<?php echo esc_url( home_url('/contact') ); ?>"><?php esc_html_e('Contact Us', 'csl-cannabis'); ?></a>
  </div>
</section>

<?php get_footer();
