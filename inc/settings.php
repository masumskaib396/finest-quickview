<?php
// setting
function settings( $settings ) {

	$settings[] = array(
		'name' => __( 'Quick View', 'finest-quickview' ),
		'type' => 'title',
		'desc' => 'The following options are used to configure the Quick View extension.',
		'id'   => 'finest_quick_view',
	);

	$settings[] = array(
		'id'      => 'finest_quick_view_enable',
		'name'    => __( 'Enable Quick View', 'finest-quickview' ),
		'desc'    => __( 'Choose what event should trigger quick view', 'finest-quickview' ),
		'type'    => 'checkbox',
		'default' => 'yes',

	);
	$settings[] = array(
		'id'      => 'finest_quick_view_trigger',
		'name'    => __( 'Quick View Style', 'finest-quickview' ),
		'desc'    => __( 'Choose what event should trigger quick view', 'finest-quickview' ),
		'type'    => 'select',
		'options' => array(
			'icon'   => __( 'Icon', 'finest-quickview' ),
			'text' => __( 'Text', 'finest-quickview' ),
			'icon_text' => __( 'Icon with Text', 'finest-quickview' ),

		),
	);
	$settings[] = array(
		'type' => 'sectionend',
		'id'   => 'finest_quick_view',
	);

	return $settings;
}
add_filter( 'woocommerce_general_settings', 'settings' );