<?php
/**
 * Plugin Name: JM Customizations
 * Description: Site-specific customizations.
 * Author: Justin Moss
 * Version: 1.0.1
 */

if (!defined('ABSPATH')) { exit; }

// Kill switch (set in wp-config.php): define('JM_DISABLE_CUSTOM', true);
if (defined('JM_DISABLE_CUSTOM') && JM_DISABLE_CUSTOM) { return; }

$base = __DIR__ . '/jm-custom';

if (is_dir($base)) {
  foreach (glob($base . '/*.php') as $file) {
    require_once $file;
  }
}
