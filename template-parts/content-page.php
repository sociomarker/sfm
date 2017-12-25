<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sfm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="page-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
						</div>
					</div>
				</div>
	</section>

	<?php sfm_post_thumbnail(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
	
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sfm' ),
				'after'  => '</div>',
			) );
		?>
			</div>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'sfm' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
