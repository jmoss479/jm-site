<?php 

// Add Cart Icon with Ajax product Count
add_filter( 'woocommerce_add_to_cart_fragments', 'milly_add_to_cart_fragment',10,1);

function milly_add_to_cart_fragment($fragments){
	ob_start();
	global $woocommerce;
	$total_items = $woocommerce->cart->cart_contents_count;
		
	?>
	<a class="milly-cart" href="<?php echo wc_get_cart_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"/></svg>
		<span class="milly-cart-count-<?php echo $total_items; ?>"><?php echo $total_items; ?> </span>
	</a>

	<?php 
	$fragments['.milly-cart a'] = ob_get_clean();
	return $fragments;
}

// Remove Zoom Effect on Product Page
add_action( 'wp', 'milly_remove_image_zoom_support', 100 );
function milly_remove_image_zoom_support() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}

// User Name Shortcode
function milly_current_user_display_name () {
	$user = wp_get_current_user();
	$display_name = $user->display_name;
	return $user->display_name;
}
add_shortcode('current_user_display_name', 'milly_current_user_display_name');