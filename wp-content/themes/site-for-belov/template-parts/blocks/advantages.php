<?php

/**
 * Advantages Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "class_name" and "align" values.
$class_name = 'advantages';
if ( ! empty( $block['class_name'] ) ) {
	$class_name .= ' ' . $block['class_name'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$advantages = get_field( 'advantages' );

?>
<div class="<?php echo esc_attr( $class_name ); ?>">
	<div class="advantages__title"><?php echo get_field( 'advantages_title' ); ?></div>
	<div class="advantages__inner">
		<?php
		if ( $advantages ) :
			foreach ( $advantages as $advantage ) :
				$advantage_image = $advantage['image'];
				$advantage_title = $advantage['title'];
				$advantage_text  = $advantage['text'];
				?>
				<div class="advantages__item">
					<div class="advantages__item-image"><img src="<?php echo esc_url( $advantage_image['sizes']['medium'] ); ?>" alt="<?php echo esc_html( $advantage_image['alt'] ); ?>"></div>
					<div class="advantages__item-title"><?php echo esc_html( $advantage_title ); ?></div>
					<div class="advantages__item-text"><?php echo esc_html( $advantage_text ); ?></div>
				</div>
				<?php
				endforeach;
				endif;
		?>
	</div>
</div>
