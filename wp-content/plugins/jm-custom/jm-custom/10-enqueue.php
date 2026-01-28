<?php
if ( ! defined('ABSPATH') ) exit;

/**
 * JM Enqueue
 * - Site-level CSS/JS (plugin layer, not theme layer)
 */

/**
 * Front-end assets
 */
add_action('wp_enqueue_scripts', function () {

  // Main site CSS
  wp_enqueue_style(
    'jm-custom',
    plugins_url('jm-assets/custom.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.2'
  );

  // Canvas CSS
  wp_enqueue_style(
    'jm-canvas',
    plugins_url('jm-assets/canvas.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.1'
  );

  // Main site JS
  wp_enqueue_script(
    'jm-custom',
    plugins_url('jm-assets/custom.js', __DIR__ . '/../jm-custom.php'),
    ['jquery'],
    '1.0.2',
    true
  );

}, 20);

/**
 * Admin assets
 */
add_action('admin_enqueue_scripts', function () {

  wp_enqueue_style(
    'jm-admin',
    plugins_url('jm-assets/admin.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.0'
  );

  wp_enqueue_script(
    'jm-admin',
    plugins_url('jm-assets/admin.js', __DIR__ . '/../jm-custom.php'),
    ['jquery'],
    '1.0.0',
    true
  );

}, 20);
