<?php

Kirki::add_section( 'finest_settings', array(
    'title'          => esc_html__( 'General Options', 'finest-quickview' ),
    'panel'          => 'finest_panel',
    'priority'       => 160,
) );


Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_quick_view',
	'label'       => esc_html__( 'Show Quick View', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
] );

Kirki::add_field( 'finest_panel', [
	'type'        => 'select',
	'settings'    => 'quickview_option',
	'label'       => esc_html__( 'Show Quick view on Tablet Device', 'finest-quickview' ),
	'section'     => 'finest_settings',
	'default'     => 'after_add_to_cart',
	'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'before_title' => esc_html__( 'Before Title', 'finest-quickview' ),
		'after_title' => esc_html__( 'After Title', 'finest-quickview' ),
		'after_rating' => esc_html__( 'After Rating', 'finest-quickview' ),
		'after_price' => esc_html__( 'After Price', 'finest-quickview' ),
		'before_add_to_cart' => esc_html__( 'Before Add to Cart', 'finest-quickview' ),
		'after_add_to_cart' => esc_html__( 'After add_to_cart', 'finest-quickview' ),
	],
   
] );

Kirki::add_field( 'finest_panel', [
	'type'     => 'text',
	'settings' => 'change_button_text',
	'label'    => esc_html__( 'Change Text on Button', 'finest-quickview' ),
	'section'  => 'finest_settings',
	'default'  => esc_html__( 'Quick View', 'finest-quickview' ),
	'priority' => 10,
   
] );

Kirki::add_field( 'finest_panel', [
	'type'        => 'select',
	'settings'    => 'qucik_view_style',
	'label'       => esc_html__( 'Quick View Button Style', 'finest-quickview' ),
	'section'     => 'finest_settings',
	'default'     => 'only_text',
	'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'only_text' => esc_html__( 'Text', 'finest-quickview' ),
		'only_icon' => esc_html__( 'Icon', 'finest-quickview' ),
		'icon_text' => esc_html__( 'Icon with Button', 'finest-quickview' ),
	],
   
] );

// Tablet device

Kirki::add_field( 'finest_panel', [
	'type'        => 'select',
	'settings'    => 'tablate_option',
	'label'       => esc_html__( 'Show Quick view on Tablet Device', 'finest-quickview' ),
	'section'     => 'finest_settings',
	'default'     => 'tablate_show',
	'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'tablate_show' => esc_html__( 'Show', 'finest-quickview' ),
		'tablate_hide' => esc_html__( 'Hide', 'finest-quickview' ),
	],
   
] );

Kirki::add_field( 'finest_panel', [
	'type'        => 'select',
	'settings'    => 'mobile_option',
	'label'       => esc_html__( 'Show Quick view on Mobile Device', 'finest-quickview' ),
	'section'     => 'finest_settings',
	'default'     => 'mobile_show',
	'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'mobile_show' => esc_html__( 'Show', 'finest-quickview' ),
		'mobile_hide' => esc_html__( 'Hide', 'finest-quickview' ),
	],
    
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'modal_close_button',
	'label'       => esc_html__( 'Show Close Button', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
    
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_title_view',
	'label'       => esc_html__( 'Show Title', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
    
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_rating_view',
	'label'       => esc_html__( 'Show Rating', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
   
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_price_view',
	'label'       => esc_html__( 'Show Price', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
   
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_decription_view',
	'label'       => esc_html__( 'Show Excerpt', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
   
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_quantity_view',
	'label'       => esc_html__( 'Show Quantity', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
    
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_meta_view',
	'label'       => esc_html__( 'Show Meta', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
   
] );

Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_sharing_view',
	'label'       => esc_html__( 'Show Sharing', 'finest-quickview' ),
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
    ],
    
] );




