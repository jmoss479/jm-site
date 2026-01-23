<?php

add_filter('et_epanel_tab_names', 'dlov_add_epanel_tab');
function dlov_add_epanel_tab($tabs)
{
	$tabs["dlov_milly"] = "Milly";
	return $tabs;
}

add_filter('et_epanel_layout_data', 'dlov_add_epanel_tab_content');
function dlov_add_epanel_tab_content($layout_data)
{
	// Start the wrapper for the dlov_milly Tab
	$layout_data[] = [
		"name" => "wrap-dlov_milly",
		"type" => "contenttab-wrapstart",
	];
	
	// Add sub-tabs
	$layout_data[] = ["type" => "subnavtab-start"];
	
		$layout_data[] = [
			"name" => "dlov_milly-general",
			"type" => "subnav-tab",
			"desc" => "Colors",
		];
		$layout_data[] = [
			"name" => "dlov_milly-overlays",
			"type" => "subnav-tab",
			"desc" => "Overlays",
		];
		$layout_data[] = [
			"name" => "dlov_milly-preloader",
			"type" => "subnav-tab",
			"desc" => "Preloader",
		];
		
		$layout_data[] = [
			"name" => "dlov_milly-options",
			"type" => "subnav-tab",
			"desc" => "Options",
		];
	
	$layout_data[] = ["type" => "subnavtab-end"];


	$layout_data[] = [
		"name" => "dlov_milly-general",
		"type" => "subcontent-start",
	];
		$layout_data[] = [
			"name" => "Dark Elements and Headings",
			"id" => "dlov_dark_color1",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#182121",
			"desc" => "This color is used mainly for heading text, CTA background and dark decorative elements. Default value is #182121.",
		];		
		$layout_data[] = [
			"name" => "Dark Elements and Body Text",
			"id" => "dlov_dark_color2",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#535757",
			"desc" => "This color is used mainly for body text and dark overlays. Default value is #535757.",
		];		
		$layout_data[] = [
			"name" => "Accent Color #1",
			"id" => "dlov_accent_color1",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#eaf5f0",
			"desc" => "This is a main accent color, used across the site. We recommend using a light color value. Default value is #eaf5f0.",
		];
		$layout_data[] = [
			"name" => "Accent Color #2",
			"id" => "dlov_accent_color2",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#cde4d9",
			"desc" => "This is a secondary complimentary accent color, used across the site. We recommend using a color slightly darker than Accent #1. Default value is #cde4d9.",
		];
		$layout_data[] = [
			"name" => "Accent Color #3",
			"id" => "dlov_accent_color3",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#33876b",
			"desc" => "This color is used for accents and CTA elements. Default value is #33876b",
		];		
		

	$layout_data[] = [
		"name" => "dlov_milly-general",
		"type" => "subcontent-end",
	];
	
	$layout_data[] = [
		"name" => "dlov_milly-overlays",
		"type" => "subcontent-start",
	];
	
		$layout_data[] = [
			"name" => "Overlay background color",
			"id" => "dlov_overlay_bg",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "rgba(255,255,255,0.8)",
			"desc" => "Choose the color of the overlay background. Default value is rgba(255,255,255,0.8)",
		];	
			
		$layout_data[] = [
			"name" => "Blur the background",
			"id" => "dlov_blur_overlay",
			"type" => "checkbox",
			"std" => "on",
			"desc" => "Check this option to blur the background behind the overlay. This option has limited browser support.",
		];	
		
		$layout_data[] = [
			"name" => "Close the overlay on background click",
			"id" => "dlov_overlay_click",
			"type" => "checkbox",
			"std" => "off",
			"desc" => "Check this option to close the overlay when a user clics on the background behind the content.",
		];	
		
		$layout_data[] = [
			"name" => "Close the overlay with Escape key",
			"id" => "dlov_overlay_escape",
			"type" => "checkbox",
			"std" => "off",
			"desc" => "Check this option to close the overlay when a user presses the Escape key one the keyboard.",
		];	
		
		$layout_data[] = [
			'name' => 'Close icon',
			'desc' => '',
			"std" => "dlov_icon1",
			"type" => "callback_function",
			"function_name" => 'dlov_overlay_icon',
		];
		
		$layout_data[] = [
			"name" => "Close icon color",
			"id" => "dlov_overlay_icon_color",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#000",
			"desc" => "Choose the color of the close icon. Default value is #000",
		];	
			
		$layout_data[] = [
			"name" => "Hide overlays in the Builder",
			"id" => "dlov_hide_overlays",
			"type" => "checkbox",
			"std" => "off",
			"desc" => "Check this option to hide all Overlays when editing the page in the Visual Builder. Please note that you can hide individual overlay by using a custom CSS class of 'builder-hidden', and hidden overlays are still accessible from the Wireframe view.",
		];	
	
	
	$layout_data[] = [
		"name" => "dlov_milly-overlays",
		"type" => "subcontent-end",
	];
	
	
	$layout_data[] = [
		"name" => "dlov_milly-preloader",
		"type" => "subcontent-start",
	];
	
		$layout_data[] = [
				"name" => "Enable Global Preloader",
				"id" => "dlov_enable_preloader",
				"type" => "checkbox",
				"std" => "on",
				"desc" => "Enable this to show a preloader while the page content is loading.",
			];
		
		$layout_data[] = [
				'name' => 'Preloader Animation',
				'desc' => '',
				"std" => "dlov_loader1",
				"type" => "callback_function",
				"function_name" => 'dlov_preloader',
			];
		$layout_data[] = [
			"name" => "Preloader Color",
			"id" => "dlov_preloader_color",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#000",
			"desc" => "Choose the color of the preloader animated element. Default value is #000",
		];	
		$layout_data[] = [
			"name" => "Preloader Background",
			"id" => "dlov_preloader_bg_color",
			"type" => "et_color_palette",
			"items_amount" => 1,
			"std" => "#fff",
			"desc" => "Choose the color of the preloader background icon. Default value is #fff",
		];
		
	
	$layout_data[] = [
		"name" => "dlov_milly-preloader",
		"type" => "subcontent-end",
	];
			
	$layout_data[] = [
		"name" => "dlov_milly-options",
		"type" => "subcontent-start",
	];
		
		$layout_data[] = [
			"name" => "Enable Parallax Hover Effect",
			"id" => "dlov_enable_parallax",
			"type" => "checkbox",
			"std" => "on",
			"desc" => "Check this option to enable parallax mouse-aware hover effect. It will apply to modules inside an element with a CSS class of 'milly-parallax'.",
		];	
		
		$layout_data[] = [
			"name" => "Enable Carousels and Sliders",
			"id" => "dlov_enable_sliders",
			"type" => "checkbox",
			"std" => "on",
			"desc" => "Check this option to enable slider scripts. For details on how to use the sliders, please refer to the child theme documentation page.",
		];	
		
		$layout_data[] = [
			"name" => "dlov_milly-options",
			"type" => "subcontent-end",
		];
		
	$layout_data[] = [
		"name" => "wrap-dlov_milly",
		"type" => "contenttab-wrapend",
	];
	
	return $layout_data;
}

function dlov_overlay_icon(){
	$overlay_icon = array(
		'overlay_icon1' => array(
			'value' => 'dlov_icon1'
		),
		'overlay_icon2' => array(
			'value' => 'dlov_icon2'
		),
		'overlay_icon3' => array(
			'value' => 'dlov_icon3'
		),	
		'overlay_icon4' => array(
			'value' => 'dlov_icon4'
		),
	);
	
	$gt_overlay_icon = get_option( 'dlov_overlay_icon' ) ;
		foreach( $overlay_icon as $icon ) : ?>
			<div style="margin-right:20px; display: inline-block; ">
			<label for="<?php echo esc_attr_e($icon['value']); ?>">
				<input type="radio"  name="dlov_overlay_icon" id="<?php echo esc_attr_e($icon['value']); ?>" value="<?php esc_attr_e( $icon['value'] ); ?>" <?php checked( $gt_overlay_icon, $icon['value'] ); ?>  class="myradio"/>
				<div class="<?php echo esc_attr_e($icon['value']); ?>"></div>
			</label>
			</div>
		<?php
		endforeach;
} 

function dlov_preloader(){
	$preloader = array(
		'preloader1' => array(
			'value' => 'dlov_loader1'
		),
		'preloader2' => array(
			'value' => 'dlov_loader2'
		),
		'preloader3' => array(
			'value' => 'dlov_loader3'
		),	
		'preloader4' => array(
			'value' => 'dlov_loader4'
		),
		'preloader5' => array(
			'value' => 'dlov_loader5'
		),
	);
		
	$gt_preloader = get_option( 'dlov_preloader' ) ;
		foreach( $preloader as $loader ) : ?>
			<div style="margin-right:20px; display: inline-block; ">
			<label for="<?php echo esc_attr_e($loader['value']); ?>">
				<input type="radio"  name="dlov_preloader" id="<?php echo esc_attr_e($loader['value']); ?>" value="<?php esc_attr_e( $loader['value'] ); ?>" <?php checked( $gt_preloader, $loader['value'] ); ?>  class="myradio"/>
				<div class="<?php echo esc_attr_e($loader['value']); ?>"></div>
			</label>
			</div>
		<?php
		endforeach;
} 

function dlov_epanel_save_callback( $source ){
	update_option('dlov_overlay_icon',$_POST['dlov_overlay_icon']);
	update_option('dlov_preloader',$_POST['dlov_preloader']);
}
add_action( 'wp_ajax_save_epanel', 'dlov_epanel_save_callback' );





