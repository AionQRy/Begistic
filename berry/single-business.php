<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
								<?php wp_nav_menu( array( 'theme_location' => 'business-type') );?>
						</ul>
						</aside>
				</div>
				<div id="col-main" class="col-md-12 main-primary">
					<div id="primary" class="content-area <?php echo '-'.SEED_BLOG_LAYOUT; ?>">
						<main id="main" class="site-main -hide-title" role="main">
							<div class="main-header">
								<span class="amx-cp-panel-ribbon-banner"></span>
								<div class="container">
									<?php
									$categories = get_the_category();
									$category_name = $categories[0]->name;
									?>
									<h2 class="main-title"><?php the_title(); ?></h2>
								</div>
							</div>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'single' ); ?>

						<?php endwhile; // End of the loop. ?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!--col-md-8-->
			</div><!--row-->
		</div><!--col-12-->
	</div><!--row-->
</div><!--container-->
<?php get_footer(); ?>
