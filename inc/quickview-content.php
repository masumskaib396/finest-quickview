<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$titelshow = get_theme_mod( 'on_title_view' );
$ratingshow = get_theme_mod( 'on_rating_view' );
$priceshow = get_theme_mod( 'on_price_view' );
$descshow = get_theme_mod( 'on_decription_view' );
$quantityshow = get_theme_mod( 'on_quantity_view' );
$metashow = get_theme_mod( 'on_meta_view' );
$sharingshow = get_theme_mod( 'on_sharing_view' );

global $product;
$attachment_ids = $product->get_gallery_image_ids() ? $product->get_gallery_image_ids() : array();
if ( $product->get_image_id() ){
    $attachment_ids = array( 'finestquick_thumbnail_id' => $product->get_image_id() ) + $attachment_ids;
}

?>
<div class="finest-content">
    <div class="finest-left-side">
    	<div class="finest-qwick-view-left">
            <div class="woocommerce finest-quick-view-learg-img">
             <?php
                    if ( $attachment_ids ) {
                        $i = 0;
                        foreach ( $attachment_ids as $attachment_id ) {
                            $i++;

                            $html = wc_get_gallery_image_html( $attachment_id, true );

                            if( $i == 1 ){
                                echo '<div class="finest-quick-view-single finest-quickview-firfinest-image">'.apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_id ).'</div>';
                            }
                            else{
                                echo '<div class="finest-quick-view-single">'.apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_id ).'</div>';
                            }

                        }
                    }
                ?>
            </div>
            <div class="finest-quick-view-thumbnails">
                <?php
                    if ( $attachment_ids && $product->get_image_id() ) {
                        foreach ( $attachment_ids as $attachment_id ) {
                            ?>
                                <div class="finest-quick-thumb-single">
                                    <?php $thumbnail_src = wp_get_attachment_image_src( $attachment_id, 'woocommerce_gallery_thumbnail' );?>
                                    <img src="<?php echo esc_url($thumbnail_src[0]); ?>" alt="<?php the_title(); ?>">
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="finest-right-side">
        <div class="finest-quick-view-right">
            <?php do_action( 'finest_quick_quickview_before_summary' ); ?>
            <div class="entry-summary">
                <?php
                   if ( true === $titelshow ) { 
                     add_action( 'finest_quick_content', 'woocommerce_template_single_title', 5 ); 
                    }
                   if ( true === $ratingshow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_rating', 10 );
                   }
                    if ( true === $priceshow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_price', 10 );
                    }
                    if ( true === $descshow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_excerpt', 20 );
                    }
                    if ( true === $quantityshow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_add_to_cart', 30 );
                    }
                    if ( true === $metashow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_meta', 40 );
                    }
                    if ( true === $sharingshow ) {
                    add_action( 'finest_quick_content', 'woocommerce_template_single_sharing', 50 );
                    }
                    // Render Content
                    do_action( 'finest_quick_content' );
                ?>
            </div><!-- .summary -->
            <?php do_action( 'finest_quick_quickview_after_summary' ); ?>

        </div>
    </div>

</div>