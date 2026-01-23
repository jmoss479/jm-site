<?php
if (!defined('ABSPATH')) exit;

/**
 * JM Debug (staging only)
 */

if (!function_exists('jm_is_staging') || !jm_is_staging()) {
  return;
}

// Put staging-only helpers here.
