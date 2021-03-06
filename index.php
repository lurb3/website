<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="container frontpage">
	<div class="row frontpage-copy">
		<div class="col-12 text-center">
			<span class="logo">{G}</span>
			<h1 class="m-auto pb-2 w-100 text-center">Gustavo Monteiro</h1>
			<h2 class="m-auto pb-5 w-100 text-center">Junior Front-End Developer</h2>
			<p class="m-auto w-100 text-center">
				Porto - Portugal<br>
				gustavo.gigante.s@gmail.com
			</p>
		</div>
	</div>
	<div class="social-icons text-center mt-3">
		<a href="https://www.linkedin.com/in/gustavo-monteiro/" target="_blank"><i class="fab fa-linkedin-in pr-3"></i></a>
		<a href="https://twitter.com/GustavoM0nteiro" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
		<a href="https://github.com/lurb3" target="_blank"><i class="fab fa-github"></i></a>
	</div>
	<?php include 'inc/nav-menu.php'; ?> <!-- Include Nav Menu -->
</div>


<?php get_footer(); ?>
