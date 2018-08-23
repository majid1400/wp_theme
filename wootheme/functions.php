<?php
//define('WOO_EXP_FONTS',get_template_directory_uri().'assets/fonts/');
function woxp_load_asset( $file_name = null ) {
	if ( is_null( $file_name ) ) {
		woxp_assets_url();
	}

	return woxp_assets_url() . $file_name;
}

function woxp_assets_url() {
	return get_template_directory_uri() . '/assets/';
}

function woxp_images_url() {
	return woxp_assets_url() . 'images/';
}
