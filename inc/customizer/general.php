<?php

Kirki::add_section( 'finest_settings', array(
    'title'          => esc_html__( 'General Options', 'kusum' ),
    'panel'          => 'finest_panel',
    'priority'       => 160,
) );


Kirki::add_field( 'finest_panel', [
    'type'        => 'switch',
    'settings'    => 'on_quick_view',
    'section'     => 'finest_settings',
    'default'     => 'on',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'finest-quickview' ),
        'off' => esc_html__( 'Disable', 'finest-quickview' ),
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
	'label'       => esc_html__( 'Quick View Style', 'finest-quickview' ),
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




