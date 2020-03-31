<?php

/**
 * Plugin Name: Callout block
 * Author: Johan Ronsse
 * Description: A simple Gutenberg block to add a callout
 * Version: 1.1.0
 */

// Load assets for wp-admin when editor is active
function jr_gutenberg_callout_block_admin() {
   wp_enqueue_script(
      'gutenberg-callout-block-editor',
      plugins_url( 'block.js', __FILE__ ),
      array( 'wp-blocks', 'wp-element' )
   );

}
 
add_action( 'enqueue_block_editor_assets', 'jr_gutenberg_callout_block_admin' );

?>