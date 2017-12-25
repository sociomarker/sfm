<?php
/**
 * Template Name: Half-Width
 * // for sidebar
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sfm
 */

get_header(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div role="main" class="main">
			<div class="container">
			<div class="row">

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


			<div class="col-md-9">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>				
			<div class="col-md-3">
			<?php 
				get_sidebar();
			?>
			</div>
			</article><!-- #post-<?php the_ID(); ?> -->	
			</div>
			</div>			
			</div>			
		</main><!-- #main -->
<?php
get_footer();
