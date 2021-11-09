<?php

// Button Icon
function finest_quickview_render_infooter() {
	echo '<div class="woocommerce" id="fdquick-viewmodal">
           <div class="fdqv-modal-dialog product">
               <div class="fdqv-modal-content">
                   <button type="button" class="fdqvcloseqv"><i class="fas fa-times"></i></button>
                   <div class="fdqv-modal-body">
                   </div>
                </div>
            </div>
        </div>';
}
add_action( 'wp_footer', 'finest_quickview_render_infooter' );

// Button
if ( !function_exists( 'finest_quickview_button' ) ) {
	function finest_quickview_button() {

		$ajaxurl = admin_url('admin-ajax.php');
	    $nonce = wp_create_nonce('stor_product_load');
        ?>
            <a href="#" class="storquickview" data-id="<?php echo get_the_ID() ?>" data-url="<?php echo esc_url($ajaxurl) ?>" data-referrar="<?php echo esc_attr( $nonce ) ?>">
            <?php esc_html_e('Quick View', 'finest-quickview') ?>
            <i class="fas fa-eye"></i>
            </a>
        <?php

	}
}
add_action('woocommerce_after_shop_loop_item', 'finest_quickview_button', 35);


// Lode Ajax Content Data
function finest_quickview_ajax_data() {
    if ( isset( $_POST['id'] ) && (int) $_POST['id'] ) {
        global $post, $product, $woocommerce;
        $id      = ( int ) $_POST['id'];
        $post    = get_post( $id );
        $product = get_product( $id );
        if ( $product ) {
			include __DIR__.'/../inc/quickview-content.php';
        }
    }
    wp_die();
}
add_action( 'wp_ajax_finest_quickview', 'finest_quickview_ajax_data' );
add_action( 'wp_ajax_nopriv_finest_quickview', 'finest_quickview_ajax_data');
