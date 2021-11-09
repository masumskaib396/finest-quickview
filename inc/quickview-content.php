<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$attachment_ids = $product->get_gallery_image_ids() ? $product->get_gallery_image_ids() : array();
if ( $product->get_image_id() ){
    $attachment_ids = array( 'finestquick_thumbnail_id' => $product->get_image_id() ) + $attachment_ids;
}

?>
<div class="row">
    <div class="col-md-5 col-12">
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

    <div class="col-md-7 col-12">
        <div class="finest-quick-view-right">
            <?php do_action( 'finest_quick_quickview_before_summary' ); ?>
            <div class="entry-summary">
                <?php
                    add_action( 'finest_quick_content', 'woocommerce_template_single_title', 5 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_rating', 10 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_price', 10 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_excerpt', 20 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_add_to_cart', 30 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_meta', 40 );
                    add_action( 'finest_quick_content', 'woocommerce_template_single_sharing', 50 );

                    // Render Content
                    do_action( 'finest_quick_content' );
                ?>
            </div><!-- .summary -->
            <?php do_action( 'finest_quick_quickview_after_summary' ); ?>

        </div>
    </div>

</div>