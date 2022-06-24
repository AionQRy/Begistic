<?php
/**
 * Loop Name: Content Post Detail
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_post_thumbnail('singlepost-thumb', array('class' => 'img-singlepost')); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //seed_posted_on(); ?>
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seed' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php seed_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
