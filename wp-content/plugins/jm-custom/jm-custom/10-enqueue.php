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

  // Canvas CSS
  wp_enqueue_style(
    'jm-canvas',
    plugins_url('jm-assets/canvas.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.6'
  );

  // Main site CSS (load AFTER Milly + Canvas)
  wp_enqueue_style(
    'jm-custom',
    plugins_url('jm-assets/custom.css', __DIR__ . '/../jm-custom.php'),
    ['jm-canvas', 'milly-style'],
    '1.0.7'
  );

  // Main site JS
  wp_enqueue_script(
    'jm-custom',
    plugins_url('jm-assets/custom.js', __DIR__ . '/../jm-custom.php'),
    ['jquery'],
    '1.0.6',
    true
  );

}, 99);


/**
 * Admin assets
 */
add_action('admin_enqueue_scripts', function () {

  wp_enqueue_style(
    'jm-admin',
    plugins_url('jm-assets/admin.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.1'
  );

  wp_enqueue_script(
    'jm-admin',
    plugins_url('jm-assets/admin.js', __DIR__ . '/../jm-custom.php'),
    ['jquery'],
    '1.0.1',
    true
  );

}, 20);
