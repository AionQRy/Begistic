<?php
/**
 * Template Name: Page Sustainability File
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

							<div class="detail-file">
								<?php if( have_rows('file_repeat_sustainability', 'option') ): ?>
									<table>
										<thead>
											<tr>
												<th scope="col">Date / Time</th>
												<th scope="col">Topic</th>
												<th scope="col">Detail</th>
											</tr>
										</thead>
											<tbody>
									<?php while( have_rows('file_repeat_sustainability', 'option') ): the_row();

										// vars
										$name = get_sub_field('name_file_sustainability', 'option');
										$file = get_sub_field('file_sustainability', 'option');
										$date = get_the_date('M d, Y', $attachment_id);
										?>
										    <tr>
										      <td scope="row" data-label="Date / Time"><?php echo $date; ?></td>
										      <td data-label="Topic"><?php echo $name; ?></td>
													<?php if( $file ): ?>
										      <td data-label="Detail"><a href="<?php echo $file['url']; ?>" class="link-detail" target="_blank">Detail</a></td>
												  <?php endif; ?>
										    </tr>
									<?php endwhile; ?>
										</tbody>
									</table>
								<?php endif; ?>
							</div>

								</main><!-- #main -->
							</div><!-- #primary -->
							</div>
			</div>
		</div>
	</div>
</div><!--container-->
<?php get_footer(); ?>
