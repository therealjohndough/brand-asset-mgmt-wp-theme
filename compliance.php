<?php
/**
 * Compliance helpers (state-specific disclaimers)
 *
 * @package csl-cannabis
 */

if (!defined('ABSPATH')) { exit; }

function csl_get_disclaimer($state = 'NY'){
  $d = [
    'NY' => __('For use only by adults 21+. Keep out of reach of children and pets. Using cannabis, in any form, while you are pregnant or chest/breastfeeding passes THC to your baby and may be harmful to your baby. There is no known safe amount of cannabis use during pregnancy or while chest/breastfeeding.', 'csl-cannabis'),
    'CA' => __('For adult use only, 21+. This product contains cannabis, a Schedule I controlled substance. Keep out of reach of children and animals. Cannabis may impair concentration, coordination, and judgment. Do not operate a vehicle or machinery under the influence.', 'csl-cannabis'),
    'MA' => __('This product has not been analyzed or approved by the FDA. There may be health risks associated with consumption of this product. For use only by adults 21+. Keep out of the reach of children. Do not drive or operate machinery under the influence of this drug.', 'csl-cannabis'),
    'NJ' => __('For use only by adults 21 years of age or older. Keep out of reach of children. Driving while impaired by cannabis is illegal.', 'csl-cannabis'),
    'Other' => __('For adult use only where legal. Follow all local regulations. Keep out of reach of children. Do not drive or operate machinery while impaired.', 'csl-cannabis'),
  ];
  $key = strtoupper(sanitize_text_field($state));
  return isset($d[$key]) ? $d[$key] : $d['Other'];
}
