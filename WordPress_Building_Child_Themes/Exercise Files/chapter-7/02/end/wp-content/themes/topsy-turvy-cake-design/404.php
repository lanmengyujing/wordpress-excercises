<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '404 - Page Not Found', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text">
					<p>We couldn't find the page you were looking for. It probably got lost in the baking supplies.</p>
					<p>Maybe try a search?</p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->

				<div class="page-content image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/404-sweets.png" />
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
