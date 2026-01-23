<?php
if (!defined('ABSPATH')) exit;

/**
 * JM Performance
 * - Small, safe tweaks only. Test thoroughly.
 */

// Example (optional): disable emojis (safe for most sites).
add_action('init', function () {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
});
