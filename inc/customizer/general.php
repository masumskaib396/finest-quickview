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
	'type'        => 'select',
	'settings'    => 'new',
	'label'       => esc_html__( 'This is the label', 'finest-quickview' ),
	'section'     => 'finest_settings',
	'default'     => 'option-1',
	'placeholder' => esc_html__( 'Select an option...', 'finest-quickview' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'option-1' => esc_html__( 'Option 1', 'finest-quickview' ),
		'option-2' => esc_html__( 'Option 2', 'finest-quickview' ),
		'option-3' => esc_html__( 'Option 3', 'finest-quickview' ),
		'option-4' => esc_html__( 'Option 4', 'finest-quickview' ),
	],
] );

Kirki::add_field( 'finest_panel', [
	'type'     => 'textarea',
	'settings' => 'hello',
	'label'    => esc_html__( 'Textarea Control', 'kirki' ),
	'section'  => 'finest_settings',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );


