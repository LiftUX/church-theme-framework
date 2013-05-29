<?php
/**
 * Framework Admin Styles
 */

/*******************************************
 * ENQUEUE STYLESHEETS
 *******************************************/

/**
 * Enqueue admin stylesheets
 *
 * Note: ct-options, ct-meta-boxes handle their own stylesheets.
 */

add_action( 'admin_enqueue_scripts', 'ctfw_admin_enqueue_styles' );

function ctfw_admin_enqueue_styles() {

	$screen = get_current_screen();

	// Admin widgets
	if ( 'widgets' == $screen->base ) {
		wp_enqueue_style( 'ctfw-widgets', ctc_theme_url( CTFW_CSS_DIR . '/admin-widgets.css' ), false, CTFW_THEME_VERSION ); // bust cache on update
	}

	// Theme license
	if ( 'appearance_page_theme-license' == $screen->base ) {
		wp_enqueue_style( 'ctfw-license', ctc_theme_url( CTFW_CSS_DIR . '/admin-license.css' ), false, CTFW_THEME_VERSION ); // bust cache on update
	}
	
}
