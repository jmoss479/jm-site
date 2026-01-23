<?php function milly_inline_css() {
	$dlov_dark_color1 = et_get_option('dlov_dark_color1','#182121');
	$dlov_dark_color2 = et_get_option('dlov_dark_color2','#535757');
	$dlov_accent_color1 = et_get_option('dlov_accent_color1','#eaf5f0');
	$dlov_accent_color2 = et_get_option('dlov_accent_color2','#cde4d9');
	$dlov_accent_color3 = et_get_option('dlov_accent_color3','#33876b');
	$dlov_hide_overlays = et_get_option('dlov_hide_overlays','off');
	$dlov_overlay_bg = et_get_option('dlov_overlay_bg','rgba(255,255,255,0.8)');
	$dlov_blur_overlay = et_get_option('dlov_blur_overlay','on');
	$dlov_overlay_icon_color = et_get_option('dlov_overlay_icon_color','#000');
	$dlov_overlay_icon = get_option( 'dlov_overlay_icon' ) ;
	$milly_body_font = et_get_option('body_font');
	$milly_heading_font = et_get_option('heading_font');
?>
<style id="milly-inline-styles">
body:not(.et-fb) [class*='milly-overlay-'] {display:none;}
:root {
	--dlov_dark_color1: <?php echo esc_html($dlov_dark_color1); ?>;
	--dlov_dark_color2: <?php echo esc_html($dlov_dark_color2); ?>;
	--dlov_accent_color1: <?php echo esc_html($dlov_accent_color1); ?>;
	--dlov_accent_color2: <?php echo esc_html($dlov_accent_color2); ?>;
	--dlov_accent_color3: <?php echo esc_html($dlov_accent_color3); ?>;
	--dlov_overlay_bg: <?php echo esc_html($dlov_overlay_bg); ?>;
	--dlov_overlay_icon_color: <?php echo esc_html($dlov_overlay_icon_color); ?>;
	--dlov_body_font: <?php echo esc_html($milly_body_font); ?>;
	--dlov_heading_font: <?php echo esc_html($milly_heading_font); ?>;
}
<?php if ( $dlov_hide_overlays == 'on') { ?>
body.et-fb.et-db #et-boc .et-l [class*='milly-overlay'] {display: none !important;}
<?php } if ( $dlov_blur_overlay == 'on') { ?>
.milly-overlay-wrapper {backdrop-filter:blur(3px); -webkit-backdrop-filter:blur(3px);}
<?php } ?>
.milly-default-close svg {fill:var(--dlov_overlay_icon_color);}
</style>
<?php
 
}
add_action( 'wp_head', 'milly_inline_css', 120 );
?>