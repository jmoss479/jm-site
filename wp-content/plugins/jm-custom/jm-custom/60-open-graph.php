<?php
/**
 * Open Graph tags (Facebook / LinkedIn previews)
 */

function jm_add_open_graph_tags() {

  if (!is_singular()) { return; }

  global $post;

  // Basic values
  $title = get_the_title($post->ID);
  $url   = get_permalink($post->ID);

  // Post type
  $type = (get_post_type($post->ID) === 'page') ? 'website' : 'article';

  // Description: excerpt first, else trimmed content
  if (has_excerpt($post->ID)) {
    $description = get_the_excerpt($post->ID);
  } else {
    $description = wp_strip_all_tags($post->post_content);
    $description = wp_trim_words($description, 30, '...');
  }

  // Image: featured image first, else fallback
  $image   = '';
  $image_w = '';
  $image_h = '';

  if (has_post_thumbnail($post->ID)) {
    $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    if (!empty($image_data[0])) {
      $image   = $image_data[0];
      $image_w = $image_data[1];
      $image_h = $image_data[2];
    }
  }

  // Optional fallback (highly recommended)
  if (empty($image)) {
    // TODO: Replace with a real file you upload (1200x630)
    $image   = 'https://justinmoss.net/wp-content/uploads/2026/02/og-default-justinmoss-net.jpg';
    $image_w = 1200;
    $image_h = 630;
  }

  // Output
  echo "\n<!-- JM Open Graph -->\n";
  echo '<meta property="og:url" content="' . esc_url($url) . '" />' . "\n";
  echo '<meta property="og:type" content="' . esc_attr($type) . '" />' . "\n";
  echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
  echo '<meta property="og:description" content="' . esc_attr($description) . '" />' . "\n";
  echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";

  if (!empty($image)) {
    echo '<meta property="og:image" content="' . esc_url($image) . '" />' . "\n";
    if (!empty($image_w)) {
      echo '<meta property="og:image:width" content="' . esc_attr($image_w) . '" />' . "\n";
    }
    if (!empty($image_h)) {
      echo '<meta property="og:image:height" content="' . esc_attr($image_h) . '" />' . "\n";
    }
  }

  echo "<!-- /JM Open Graph -->\n\n";
}
add_action('wp_head', 'jm_add_open_graph_tags', 5);
