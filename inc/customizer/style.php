<?php
	Kirki::add_section( 'finest_styles', array(
		'title'          => esc_html__( 'Style Options', 'finest-quickview' ),
		'panel'          => 'finest_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'radio-buttonset',
		'settings'    => 'button_normal_hover',
		'label'       => esc_html__( 'Button Hover Normal', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => 'button_normal',
		'priority'    => 10,
		'choices'     => [
			'button_normal'   => esc_html__( 'Normal', 'kirki' ),
			'button_hover' => esc_html__( 'Hover', 'kirki' ),
		],
	] );

	
	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_text_color',
		'label'       => __( 'Button Text Color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			]
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
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'radio-buttonset',
		'settings'    => 'btn_border_property',
		'label'       => esc_html__( 'Border Property', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => 'border',
		'priority'    => 10,
		'choices'     => [
			'border'   => esc_html__( 'Border', 'kirki' ),
			'style' => esc_html__( 'Style', 'kirki' ),
			'color'  => esc_html__( 'Color', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '==',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'btn_border',
		'label'       => esc_html__( 'Button Border', 'kirki' ),
		'description' => esc_html__( 'Apply Button Border.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'1px',
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			],
			[
				'setting'  => 'btn_border_property',
				'operator' => '===',
				'value'    => 'border',
			],
		],
	] );
	Kirki::add_field( 'finest_panel', [
		'type'        => 'select',
		'settings'    => 'btn_border_style',
		'label'       => esc_html__( 'Border Style', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => 'solid',
		'placeholder' => esc_html__( 'Select an option...', 'kirki' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'none' => esc_html__( 'None', 'kirki' ),
			'dotted' => esc_html__( 'Dotted', 'kirki' ),
			'dashed' => esc_html__( 'Dashed', 'kirki' ),
			'solid' => esc_html__( 'Solid', 'kirki' ),
			'double' => esc_html__( 'Double', 'kirki' ),
			'groove' => esc_html__( 'Groove', 'kirki' ),
			'ridge' => esc_html__( 'Ridge', 'kirki' ),
			'inset' => esc_html__( 'Inset', 'kirki' ),
			'outset' => esc_html__( 'Outset', 'kirki' ),
			'initial' => esc_html__( 'Initial', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			],
			[
				'setting'  => 'btn_border_property',
				'operator' => '===',
				'value'    => 'style',
			],
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_border_color',
		'label'       => __( 'Color Control (with alpha channel)', 'kirki' ),
		'description' => esc_html__( 'This is a color control - with alpha channel.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => '#0088CC',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			],
			[
				'setting'  => 'btn_border_property',
				'operator' => '===',
				'value'    => 'color',
			],
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimensions',
		'settings'    => 'btn_margin',
		'description' => esc_html__( 'Apply Button Margin', 'kirki' ),
		'label'       => esc_html__( 'Button Margin', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => [
			'margin-top'    => '0px',
			'margin-right' => '0px',
			'margin-bottom'   => '0px',
			'margin-left'  => '0px',
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimensions',
		'settings'    => 'btn_padding',
		'description' => esc_html__( 'Apply Button Padding', 'kirki' ),
		'label'       => esc_html__( 'Button Padding', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => [
			'padding-top'    => '10px',
			'padding-right' => '15px',
			'padding-bottom'   => '10px',
			'padding-left'  => '15px',
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'btn_border_radius',
		'label'       => esc_html__( 'Button Radius', 'kirki' ),
		'description' => esc_html__( 'Apply Button Radius', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'5px',
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			]
		],
	] );

	// hover

	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_text_color_hover',
		'label'       => __( 'Button Hover Color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_hover',
			]
		],
	] );
	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'hover_btn_bg_color',
		'label'       => __( 'Button Background Color', 'finest-quickview' ),
		'section'     => 'finest_styles',
		'default'     => '#0170B9',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_hover',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'radio-buttonset',
		'settings'    => 'btn_hover_border_property',
		'label'       => esc_html__( 'Border Property', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => 'border',
		'priority'    => 10,
		'choices'     => [
			'border'   => esc_html__( 'Border', 'kirki' ),
			'style' => esc_html__( 'Style', 'kirki' ),
			'color'  => esc_html__( 'Color', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '==',
				'value'    => 'button_hover',
			]
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'hover_btn_border',
		'label'       => esc_html__( 'Button Border', 'kirki' ),
		'description' => esc_html__( 'Apply Button Border.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'1px',
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_hover',
			],
			[
				'setting'  => 'btn_hover_border_property',
				'operator' => '===',
				'value'    => 'border',
			],
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'select',
		'settings'    => 'btn_hover_border_style',
		'label'       => esc_html__( 'Border Style', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => 'solid',
		'placeholder' => esc_html__( 'Select an option...', 'kirki' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'none' => esc_html__( 'None', 'kirki' ),
			'dotted' => esc_html__( 'Dotted', 'kirki' ),
			'dashed' => esc_html__( 'Dashed', 'kirki' ),
			'solid' => esc_html__( 'Solid', 'kirki' ),
			'double' => esc_html__( 'Double', 'kirki' ),
			'groove' => esc_html__( 'Groove', 'kirki' ),
			'ridge' => esc_html__( 'Ridge', 'kirki' ),
			'inset' => esc_html__( 'Inset', 'kirki' ),
			'outset' => esc_html__( 'Outset', 'kirki' ),
			'initial' => esc_html__( 'Initial', 'kirki' ),
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			],
			[
				'setting'  => 'btn_hover_border_property',
				'operator' => '===',
				'value'    => 'style',
			],
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'color',
		'settings'    => 'btn_hover_border_color',
		'label'       => __( 'Color Control (with alpha channel)', 'kirki' ),
		'description' => esc_html__( 'This is a color control - with alpha channel.', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     => '#0088CC',
		'choices'     => [
			'alpha' => true,
		],
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_normal',
			],
			[
				'setting'  => 'btn_hover_border_property',
				'operator' => '===',
				'value'    => 'color',
			],
		],
	] );

	Kirki::add_field( 'finest_panel', [
		'type'        => 'dimension',
		'settings'    => 'hover_btn_border_radius',
		'label'       => esc_html__( 'Button Radius', 'kirki' ),
		'description' => esc_html__( 'Apply Button Radius', 'kirki' ),
		'section'     => 'finest_styles',
		'default'     =>'5px',
		'active_callback' => [
			[
				'setting'  => 'button_normal_hover',
				'operator' => '===',
				'value'    => 'button_hover',
			]
		],
	] );