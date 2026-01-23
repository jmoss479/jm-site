<?php
if (!defined('ABSPATH')) exit;

/**
 * JM Enqueue
 * - Site-level CSS/JS, not theme-level
 */

add_action('wp_enqueue_scripts', function () {

  // Front-end CSS
  wp_enqueue_style(
    'jm-custom',
    plugins_url('jm-assets/custom.css', __DIR__ . '/../jm-custom.php'),
    [],
    '1.0.0'
  );

  // Front-end JS
  wp_enqueue_script(
    'jm-custom',
    plugins_url('jm-assets/custom.js', __DIR__ . '/../jm-custom.php'),
    ['jquery'],
    '1.0.0',
    true
  );

}, 20);

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
