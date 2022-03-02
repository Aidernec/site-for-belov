<?php
/**
 * Create custom ACF-gutenberg blocks.
 *
 * @package _s
 */

add_action( 'acf/init', 'my_acf_init_block_types' );
function my_acf_init_block_types() {
	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// Register an advantages block.
		acf_register_block_type(
			array(
				'name'            => 'advantages',
				'title'           => __( 'Advantages', '_s' ),
				'description'     => __( 'Advantages block.', '_s' ),
				'render_template' => 'template-parts/blocks/advantages.php',
				'category'        => 'formatting',
				'icon'            => 'admin-comments',
				'keywords'        => array( 'advantages' ),
				'supports'        => array( 'anchor' => true ),
				'align'           => 'full',
			)
		);
	}
}
