<?php
	Kirki::add_section( 'finest_styles', array(
		'title'          => esc_html__( 'Style Options', 'kusum' ),
		'panel'          => 'finest_panel',
		'priority'       => 160,
	) );


	Kirki::add_field( 'finest_panel', [
		'type'        => 'switch',
		'settings'    => 'abc',
		'section'     => 'finest_styles',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'finest-quickview' ),
			'off' => esc_html__( 'Disable', 'finest-quickview' ),
		],
	] );