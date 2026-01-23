<?php
if (!defined('ABSPATH')) exit;

/**
 * JM Core
 * - Constants, helpers, environment gates
 */

if (!defined('JM_ENV')) {
  // Optional fallback detection (edit as desired)
  // define('JM_ENV', (strpos(home_url(), 'staging') !== false) ? 'staging' : 'production');
}

/** Helper: true when staging */
function jm_is_staging(): bool {
  return defined('JM_ENV') && JM_ENV === 'staging';
}
