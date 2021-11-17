<?php
	Kirki::add_section( 'finest_styles', array(
		'title'          => esc_html__( 'Style Options', 'finest-quickview' ),
		'panel'          => 'finest_panel',
		'priority'       => 160,
	) );


	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_text_color',
		'label'       => __( 'Button Text Color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_bg_color',
		'label'       => __( 'Button Background Color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#0170B9',
		'choices'     => [
			'alpha' => true,
		],
	] );


	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'btn_border',
		'label'       => esc_html__( 'Dimension Control', 'kirki' ),
		'description' => esc_html__( 'Description Here.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'1px',
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimensions',
		'settings'    => 'btn_padding',
		'label'       => esc_html__( 'Button Padding', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => [
			'padding-top'    => '5px',
			'padding-bottom' => '5px',
			'padding-left'   => '5px',
			'padding-right'  => '5px',
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'btn_border_radius',
		'label'       => esc_html__( 'Dimension Radius', 'kirki' ),
		'description' => esc_html__( 'Description Here.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'5px',
	] );