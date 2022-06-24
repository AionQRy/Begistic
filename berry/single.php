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
								<?php dynamic_sidebar( 'leftbar' ); ?>
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

							<?php //the_post_navigation(); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // End of the loop. ?>
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
