<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

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
							<?php echo "Cart"; ?>
						</div>
					</div>
				</div>
	</section>


			<div class="col-md-12">

			<?php
			wc_print_notices();

			/**
			 * @hooked wc_empty_cart_message - 10
			 */
			do_action( 'woocommerce_cart_is_empty' );

			if ( wc_get_page_id( 'shop' ) > 0 ) : ?>

				<p class="return-to-shop">
				
						
					<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
						<?php _e( 'Return to shop', 'woocommerce' ) ?>
					</a>
				</p>
			<?php endif; ?>


			</div>				
<!-- 			<div class="col-md-3">
			<?php 
				get_sidebar();
			?>
			</div> -->
			</article><!-- #post-<?php the_ID(); ?> -->	
			</div>
			</div>			
			</div>			
		</main><!-- #main -->
<?php
//get_sidebar();
get_footer();
