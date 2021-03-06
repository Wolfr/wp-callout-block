<?php

/**
 * Plugin Name: Callout block
 * Author: Johan Ronsse
 * Description: A simple Gutenberg block to add a callout
 * Version: 1.3.1
 */

// Load assets for wp-admin when editor is active
function jr_gutenberg_callout_block_admin() {
   wp_enqueue_script(
      'gutenberg-callout-block-editor',
      plugins_url( 'block.js', __FILE__ ),
      array( 'wp-blocks', 'wp-element' )
   );
    wp_enqueue_style( 'gutenberg-callout-block-editor-style', get_stylesheet_directory_uri() . "/block-editor.css", false, '1.0', 'all' );
}
 
add_action( 'enqueue_block_editor_assets', 'jr_gutenberg_callout_block_admin' );

?>