<?php
function fqv_options_scripts(){


    wp_enqueue_style('finest-quick-view', FINEST_QUICKVIEW_ASSETS_CSS . 'quick-view.css',array(), FINEST_QUICKVIEW_VERSION );

    $btn_text_color = get_theme_mod( 'btn_text_color', 'fff' );
    $btn_bg_color = get_theme_mod( 'btn_bg_color', '0170B9' );


    $fqv_dynamic_css  = '';

    if($btn_text_color){
        $fqv_dynamic_css .= '.storquickview { color: ' . esc_attr( $btn_text_color ) . ' } ';
        $fqv_dynamic_css .= "\n";
    }

    if($btn_bg_color){
        $fqv_dynamic_css .= '.storquickview { background-color: ' . esc_attr( $btn_bg_color ) . ' } ';
        $fqv_dynamic_css .= "\n";
    }




    $fqv_dynamic_css = fqv_css_strip_whitespace( $fqv_dynamic_css );
	wp_add_inline_style( 'finest-quick-view', $fqv_dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'fqv_options_scripts', 5 );