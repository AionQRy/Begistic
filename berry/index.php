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
								<?php dynamic_sidebar( 'leftbar' ,array( 'link_before' => '<i class="si-arrow-right"></i>' ) ); ?>
						</ul>
						</aside>
				</div>
				<div id="col-main" class="col-md-12 main-primary">
					<div id="primary" class="content-area <?php echo '-'.SEED_BLOG_LAYOUT; ?>">
						<main id="main" class="site-main" role="main">
							<div class="main-header">
								<span class="amx-cp-panel-ribbon-banner"></span>
								<div class="container">
									<?php
									// $categories = get_the_category();
									// $category_name = $categories[0]->name;
									?>
									<h2 class="main-title">News</h2>
								</div>
							</div>

							<?php if ( have_posts() ) : ?>

								<?php
									while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content');
									endwhile;
								?>

								<?php seed_posts_navigation(); ?>

							<?php else : ?>

								<?php get_template_part( 'template-parts/content', 'none' ); ?>

							<?php endif; ?>

						</main><!-- #main -->
					</div><!-- #primary -->

					<?php
					switch (SEED_BLOG_LAYOUT) {
						case 'rightbar':
						get_sidebar('right');
						break;
						case 'leftbar':
						get_sidebar('left');
						break;
						case 'full-width':
						break;
						default:
						break;
					}
					?>
								</div><!--col-md-8-->
					</div><!--row-->
				</div><!--col-12-->
			</div><!--row-->
		</div><!--container-->
<?php get_footer(); ?>
