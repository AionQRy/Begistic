<?php
/**
 * Loop Name: Content Archive
 */
?>
<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seed
 */

?>
<article id="post-<?php the_ID(); ?>">
	<div class="content-item -archive">
			<!-- content start -->
				<div class="form-judd">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
								<?php $imgs1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<div class="img-full" style="background-image: url('<?php echo $imgs1[0]; ?>'); height: 100%;background-size: cover;background-repeat: no-repeat;">
							</a>
							<?php endif; ?>
							<?php //the_post_thumbnail('full', array( 'class' => 'img-onepost' )); ?>
						</div>
						<div class="numjudd">
							<div class="content--header">
								<span class="panel-bar"></span>
								<div class="panel-title"><p>News</p></div>
							<a href="<?php the_permalink();?>">
			              <?php the_title( '<h3 class="name-judd"><span>| </span>', '</h3>' ); ?>
			          </div>
							</a>
								<?php seed_posted_on(); ?>
							<?php  echo '<p class="excerpt-center">' . get_the_excerpt() . '</p>' ;?>
							<div class="full-block">
							  <a href="<?php the_permalink(); ?>" class="button-read">Learn More</a>
							</div>
						</div>
			</div>
					<!-- content end -->
	</div>
</article><!-- #post-## -->
