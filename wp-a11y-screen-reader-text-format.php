<?php
/**
 * Plugin Name:       WP A11y Screen Reader Text Format
 * Description:       Adds a screen reader text format to the block toolbar controls.
 * Requires at least: 6.5
 * Requires PHP:      8.2
 * Version:           0.0.1
 * Author:            LTIC WordPress
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-a11y-screen-reader-text-format
 *
 * @package           wp-a11y-screen-reader-text-format
 */

namespace UBC\LTIC\A11y\ScreenReaderTextFormat;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register and Enqueue the JavaScript.
 *
 * @return void
 *
 * @package WP A11y Screen Reader Text Format
 */
function enqueue_block_editor_assets() {
	if ( file_exists( plugin_dir_path( __FILE__ ) . 'build/editor.js' ) ) {
		wp_enqueue_script(
			'wp-a11y-screen-reader-text-format-editor-script',
			plugins_url( 'build/editor.js', __FILE__ ),
			array( 'wp-blocks' ),
			filemtime( plugin_dir_path( __FILE__ ) . 'build/editor.js' ),
			true
		);
	}
}//end enqueue_block_editor_assets()

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_block_editor_assets' );

/**
 * Enqueue the CSS for the block.
 *
 * @return void
 *
 * @package WP A11y Screen Reader Text Format
 */
function enqueue_block_assets() {
	if ( file_exists( plugin_dir_path( __FILE__ ) . 'build/block.css' ) ) {
		wp_enqueue_style(
			'wp-a11y-screen-reader-text-format-block-style',
			plugins_url( 'build/block.css', __FILE__ ),
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'build/block.css' )
		);
	}
}//end enqueue_block_assets()

add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\enqueue_block_assets' );
