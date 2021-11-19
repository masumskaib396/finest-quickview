<?php

// ICON
function finest_quickview_quickview_render_infooter() {
    $closebutton = get_theme_mod( 'on_close_button' ); 
    ?>
	<div class="woocommerce" id="fdquick-viewmodal">
        <div class="fdqv-modal-dialog product">
            <div class="fdqv-modal-content">  
                <button type="button" class="fdqvcloseqv"><i class="fas fa-times"></i></button>
                <div class="fdqv-modal-body">
                </div>
            </div>
        </div>
    </div>';
<?php     
}
add_action( 'wp_footer', 'finest_quickview_quickview_render_infooter' );

// BUTTON
if ( !function_exists( 'finest_quickview_quickview_button' ) ) {
	function finest_quickview_quickview_button() {
        $option = get_option( 'finest_quick_view_trigger' );
        $on = get_option( 'finest_quick_view_enable','yes');

        $icon = '<i class="fas fa-eye"></i>';
        if ( 'icon' == $option ) {
           $icontext =  $icon;
        }
        elseif ( 'text' == $option ) {
           $icontext = __( 'Quick View', 'finest-quickview');
        }
        else {
           $icontext = $icon . __( 'Quick View', 'finest-quickview');
        }
        if ('yes' === $on) {

		$ajaxurl = admin_url('admin-ajax.php');
	    $nonce = wp_create_nonce('stor_product_load');
	    echo '<a href="javascript:void(0);" class="storquickview" data-id="'.get_the_ID().'" data-url="'. $ajaxurl .'" data-referrar="'.$nonce .'">'. $icontext.'</a>';
        }

	}
}
add_action('woocommerce_after_shop_loop_item', 'finest_quickview_quickview_button', 35);


// CONTENT
function finest_quickview_quickview() {
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
add_action( 'wp_ajax_finest_quickview', 'finest_quickview_quickview' );
add_action( 'wp_ajax_nopriv_finest_quickview', 'finest_quickview_quickview');
