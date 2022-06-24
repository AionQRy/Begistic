<?php
/**
 * Template Name: Page Agm
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

get_header();

$header_text = get_field('header_text_agmegm', 'option'); ?>

<div class="container container-custom">
		<?php echo supericon(); ?>
	<div class="row">
		<div class="col-12">
				<div id="main-row" class="row">
					<div id="col-sub" class="col-md-4 sidebar">
						<aside class="side-bar">
							<ul id="menus-sidebar" class="menu-sidebar">
							    <?php wp_nav_menu( array( 'theme_location' => 'investor-relation', 'link_before' => '<i class="si-arrow-right"></i>' ) );?>
							</ul>
							</aside>
					</div>
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
							<div class="theader-content img-investor" style="background-image: url('<?php echo $imgs1[0]; ?>'); ">
							</div>
					<?php endif; ?>

								<div class="main-annual">
									<div class="header-box">
										<h2><?php echo $header_text; ?></h2>
									</div>
									<div class="box-annual">
										<?php if( have_rows('agmegm_head', 'option') ): ?>

												<?php while( have_rows('agmegm_head', 'option') ): the_row();

													// vars 1
													$name = get_sub_field('year_agmegm_name', 'option');
													?>
													<h3><?php echo $name; ?></h3>
													<?php if( have_rows('sub_agmegm_year', 'option') ): ?>

															<?php while( have_rows('sub_agmegm_year', 'option') ): the_row();

																// vars
																$sub_name = get_sub_field('name_file_agmegm', 'option');
																$file = get_sub_field('file_agmegm', 'option');

																?>
																<div class="sub-detail">
																	<h4><?php echo $sub_name; ?></h4>
																	<a href="<?php echo $file['url']; ?>" target="_blank">Download</a>
																</div>
															<?php endwhile; ?>

														<?php endif; ?>
												<?php endwhile; ?>

											<?php endif; ?>
									</div>
								</div>
								</main><!-- #main -->
							</div><!-- #primary -->
							</div>
			</div>
		</div>
	</div>
</div><!--container-->
<?php get_footer(); ?>
