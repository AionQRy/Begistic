<?php
/**
 * Template Name: Page Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seed
 */

get_header();?>

<div class="container">
		<?php //echo supericon(); ?>
	<div class="row">
		<div class="col-12">
				<div id="main-row" class="row">
					<!-- <div id="col-sub" class="col-md-4 sidebar">
						<aside class="side-bar">
							<ul id="menus-sidebar" class="menu-sidebar">
							    <?php //wp_nav_menu( array( 'theme_location' => 'contact-menu', 'link_before' => '<i class="si-arrow-right"></i>' ) );?>
							</ul>
							</aside>
					</div> -->
				<div id="col-main" class="col-md-12 main-primary">
					<div id="primary" class="content-area">
						<main id="main" class="site-main -hide-title" role="main">
							<div class="main-header">
								<span class="amx-cp-panel-ribbon-banner"></span>
								<div class="container">
									<h2 class="main-title"><?php the_title(); ?></h2>
								</div>
							</div>
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $imgs1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<div class="theader-content" style="background-image: url('<?php echo $imgs1[0]; ?>'); ">
							</div>
					<?php endif; ?>
							
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'page' ); ?>

								<?php
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								?>

							<?php endwhile; // End of the loop. ?>

								</main><!-- #main -->
							</div><!-- #primary -->
							</div>
			</div>
		</div>
	</div>
</div><!--container-->
<?php get_footer(); ?>
