<?php

// Button Icon
function finest_quickview_render_infooter() { 
    $showhide = get_theme_mod( 'modal_close_button');
    ?>
    
	<div class="woocommerce" id="fdquick-viewmodal">
        <div class="fdqv-modal-dialog product">
            <div class="fdqv-modal-content">
                <?php if ( $showhide ): ?>
                <button type="button" class="fdqvcloseqv"><span class="dashicons dashicons-no-alt"></span></button>
                <?php endif; ?>
                <div class="fdqv-modal-body">
                </div>
            </div>
        </div>
    </div>';
<?php        
}
add_action( 'wp_footer', 'finest_quickview_render_infooter' );

$option = get_theme_mod( 'quickview_option' );
switch ($option) {
    case 'before_title':
        add_action( 'woocommerce_shop_loop_item_title', 'finest_quickview_button', 9 );
        break;
    case 'after_add_to_cart':
        add_action( 'woocommerce_after_shop_loop_item', 'finest_quickview_button', 11 );
        break;
}

// Button
if ( !function_exists( 'finest_quickview_button' ) ) {
	function finest_quickview_button() {

        $icon = '<span class="dashicons dashicons-visibility"></span>';
        $showhide = get_theme_mod( 'on_quick_view');
        $btntext = get_theme_mod( 'change_button_text');
        $btnstyle = get_theme_mod( 'qucik_view_style' ,'only_text' );
        $mobile_option = get_theme_mod( 'mobile_option', 'mobile_show' );
        $tablate_option = get_theme_mod( 'tablate_option', 'tablate_show' );

        $tb = $mobile_option. ' ' .$tablate_option;



        if('only_text' == $btnstyle){
            $f_content = $btntext;
        }elseif('only_icon' == $btnstyle){
            $f_content = $icon;
        }elseif('icon_text' == $btnstyle){
            $f_content = $icon.$btntext;
        }else{
            $f_content = '';
        };

        if ( true == $showhide ){
        $ajaxurl = admin_url('admin-ajax.php');
        $nonce = wp_create_nonce('stor_product_load');
            ?>
                <div class="finest-quickview-button <?php echo esc_attr( $tb ) ?>">
                    <a href="#" class="storquickview" data-id="<?php echo get_the_ID() ?>" data-url="<?php echo esc_url($ajaxurl) ?>" data-referrar="<?php echo esc_attr( $nonce ) ?>">
                    <?php echo $f_content; ?>
                    </a>
                </div>
            <?php
        }
	}
}
// add_action('woocommerce_after_shop_loop_item', 'finest_quickview_button', 20);


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

/**
 * Get minified css and removed space
 */
function fqv_css_strip_whitespace( $css ) {
	$replace = array(
		'#/\*.*?\*/#s' => '',  // Strip C style comments.
		'#\s\s+#'      => ' ', // Strip excess whitespace.
	);
	$search  = array_keys( $replace );
	$css     = preg_replace( $search, $replace, $css );

	$replace = array(
		': '  => ':',
		'; '  => ';',
		' {'  => '{',
		' }'  => '}',
		', '  => ',',
		'{ '  => '{',
		';}'  => '}', // Strip optional semicolons.
		",\n" => ',', // Don't wrap multiple selectors.
		"\n}" => '}', // Don't wrap closing braces.
		'} '  => "}\n", // Put each rule on it's own line.
	);
	$search  = array_keys( $replace );
	$css     = str_replace( $search, $replace, $css );

	return trim( $css );
}