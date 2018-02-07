<?php
/**
 * Loop Rating
 *
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version   3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
  return;
?>

<?php if ( $rating_html = $product->get_rating_html() ) : ?>
  <div class="star-rating-w">
    <?php echo $rating_html; ?>
  </div>
<?php endif; ?>