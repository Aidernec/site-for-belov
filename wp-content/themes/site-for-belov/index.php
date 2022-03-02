<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

$advantages = get_fields( $post->ID );

get_header();

?>

<main id="main">

	<section class="advantages">
		<div class="container">
			<?php echo the_content(); ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>
