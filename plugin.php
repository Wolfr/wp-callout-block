<?php

/**
 * Plugin Name: Callout block
 * Author: Johan Ronsse
 * Description: A simple Gutenberg block to add a callout
 * Version: 1.0.0
 */

// Load assets for wp-admin when editor is active
function jr_gutenberg_callout_block_admin() {
   wp_enqueue_script(
      'gutenberg-callout-block-editor',
      plugins_url( 'block.js', __FILE__ ),
      array( 'wp-blocks', 'wp-element' )
   );
 
   wp_enqueue_style(
      'gutenberg-callout-block-editor',
      plugins_url( 'block.css', __FILE__ ),
      array()
   );
}
 
add_action( 'enqueue_block_editor_assets', 'jr_gutenberg_callout_block_admin' );
 
// Load assets for frontend
function jr_gutenberg_callout_block_frontend() {
 
   wp_enqueue_style(
      'gutenberg-callout-block-editor',
      plugins_url( 'block.css', __FILE__ ),
      array()
   );
}
add_action( 'wp_enqueue_scripts', 'jr_gutenberg_callout_block_frontend' );

?>