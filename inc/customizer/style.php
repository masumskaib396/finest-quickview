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