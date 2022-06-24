<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package seed
 */

get_header(); ?>

<div class="container">
		<?php echo supericon(); ?>
	<div class="row">
	  <div class="col-12">
			<div id="main-row" class="row">
				<div id="col-sub" class="col-md-4 sidebar">
					<aside class="side-bar">
						<ul id="menus-sidebar" class="menu-sidebar">
								<?php dynamic_sidebar( 'l-sidebar' ); ?>
						</ul>
						</aside>
				</div>
				<div id="col-main"  class="col-md-12 main-primary">
					<div id="primary" class="content-area <?php echo '-'.SEED_BLOG_LAYOUT; ?>">
						<main id="main" class="site-main" role="main">
							<div class="main-header">
								<span class="amx-cp-panel-ribbon-banner"></span>
								<div class="container">
									<h2 class="main-title"><?php printf( esc_html__( 'Search for: %s', 'seed' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
								</div>
							</div>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php seed_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

		</div><!--col-md-8-->
		</div><!--row-->
		</div><!--col-12-->
		</div><!--row-->
		</div><!--container-->
<?php get_footer(); ?>
