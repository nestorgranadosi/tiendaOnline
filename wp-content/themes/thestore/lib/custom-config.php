<?php
  if ( !class_exists( 'Kirki' ) ) {
    return;
  }
  if ( class_exists( 'WooCommerce' ) && get_option( 'show_on_front' ) != 'page' ) {
  	Kirki::add_section( 'thestore_woo_demo_section', array(
  		'title'		 => __( 'WooCommerce Homepage Demo', 'thestore' ),
  		'priority'	 => 10,
  	) );
  }
  
  Kirki::add_field( 'thestore_settings', array(
  	'type'			 => 'switch',
  	'settings'		 => 'thestore_demo_front_page',
  	'label'			 => __( 'Enable Demo Homepage?', 'thestore' ),
  	'description'	 => sprintf( __( 'When the theme is first installed and WooCommerce plugin activated, the demo mode would be turned on. This will display some sample/example content to show you how the website can be possibly set up. When you are comfortable with the theme options, you should turn this off. You can create your own unique homepage - Check the %s page for more informations.', 'thestore' ), '<a href="' . admin_url( 'themes.php?page=maxstore-welcome' ) . '"><strong>' . __( 'Theme info', 'thestore' ) . '</strong></a>' ),
  	'section'		 => 'thestore_woo_demo_section',
  	'default'		 => 1,
  	'priority'		 => 10,
  ) );
  Kirki::add_field( 'thestore_settings', array(
  	'type'				 => 'radio-buttonset',
  	'settings'			 => 'thestore_front_page_demo_style',
  	'label'				 => esc_html__( 'Homepage Demo Styles', 'thestore' ),
  	'description'		 => sprintf( __( 'The demo homepage is enabled. You can choose from some predefined layouts or make your own %s.', 'thestore' ), '<a href="' . admin_url( 'themes.php?page=maxstore-welcome' ) . '"><strong>' . __( 'custom homepage template', 'thestore' ) . '</strong></a>' ),
  	'section'			 => 'thestore_woo_demo_section',
  	'default'			 => 'style-one',
  	'priority'			 => 10,
  	'choices'			 => array(
  		'style-one'	 => __( 'Layout one', 'thestore' ),
  		'style-two'	 => __( 'Layout two', 'thestore' ),
  	),
  	'active_callback'	 => array(
  		array(
  			'setting'	 => 'thestore_demo_front_page',
  			'operator'	 => '==',
  			'value'		 => 1,
  		),
  	),
  ) );
  Kirki::add_field( 'thestore_settings', array(
  	'type'				 => 'switch',
  	'settings'			 => 'thestore_front_page_demo_carousel',
  	'label'				 => __( 'Homepage slider', 'thestore' ),
  	'description'		 => esc_html__( 'Enable or disable demo homepage slider.', 'thestore' ),
  	'section'			 => 'thestore_woo_demo_section',
  	'default'			 => 1,
  	'priority'			 => 10,
  	'active_callback'	 => array(
  		array(
  			'setting'	 => 'thestore_demo_front_page',
  			'operator'	 => '==',
  			'value'		 => 1,
  		),
  	),
  ) );
  Kirki::add_field( 'thestore_settings', array(
  	'type'				 => 'repeater',
  	'label'				 => __( 'Slider', 'thestore' ),
  	'section'			 => 'thestore_woo_demo_section',
  	'priority'			 => 10,
  	'settings'			 => 'thestore_front_page_demo_repeater',
  	'default'			 => array(
  		array(
  			'slider_img' => get_stylesheet_directory_uri() . '/img/demo/slider1.jpg',
        'slider_url' => '',
  		),
  		array(
  			'slider_img' => get_stylesheet_directory_uri() . '/img/demo/slider2.jpg',
        'slider_url' => '',
  		),
  	),
  	'fields'			 => array(
  		'slider_img' => array(
  			'type'		 => 'image',
  			'label'		 => __( 'Slide image', 'thestore' ),
  			'default'	 => '',
  		),
      'slider_url' => array(
  			'type'		 => 'text',
  			'label'		 => __( 'Slide URL', 'thestore' ),
  			'default'	 => '',
  		),
  	),
  	'row_label'			 => array(
  		'type'	 => 'text',
  		'value'	 => __( 'Slide', 'thestore' ),
  	),
  	'choices'			 => array(
  		'limit' => 2,
  	),
    'active_callback'	 => array(
  		array(
  			'setting'	 => 'thestore_demo_front_page',
  			'operator'	 => '==',
  			'value'		 => 1,
  		),
      array(
  			'setting'	 => 'thestore_front_page_demo_carousel',
  			'operator'	 => '==',
  			'value'		 => 1,
  		),
  	),
  ) );

  Kirki::add_field( 'thestore_settings', array(
  	'type'				 => 'custom',
  	'settings'			 => 'thestore_demo_page_intro',
  	'label'				 => __( 'Products', 'thestore' ),
  	'section'			 => 'thestore_woo_demo_section',
  	'description'		 => esc_html__( 'If you dont see any products or categories on your homepage, you dont have any products probably. Create some products and categories first.', 'thestore' ),
  	'priority'			 => 10,
  	'active_callback'	 => array(
  		array(
  			'setting'	 => 'thestore_demo_front_page',
  			'operator'	 => '==',
  			'value'		 => 1,
  		),
  	),
  ) );
  Kirki::add_field( 'thestore_settings', array(
  	'type'			 => 'custom',
  	'settings'		 => 'thestore_demo_dummy_content',
  	'label'			 => __( 'Need Dummy Products?', 'thestore' ),
  	'section'		 => 'thestore_woo_demo_section',
  	'description'	 => sprintf( esc_html__( 'When the theme is first installed, you dont have any products probably. You can easily import dummy products with only few clicks. Check %s tutorial.', 'thestore' ), '<a href="' . esc_url( 'https://docs.woocommerce.com/document/importing-woocommerce-dummy-data/' ) . '" target="_blank"><strong>' . __( 'THIS', 'thestore' ) . '</strong></a>' ),
  	'priority'		 => 10,
  ) );
  Kirki::add_field( 'thestore_settings', array(
  	'type'			 => 'custom',
  	'settings'		 => 'thestore_demo_pro_features',
  	'label'			 => __( 'Need More Features?', 'thestore' ),
  	'section'		 => 'thestore_woo_demo_section',
  	'description'	 => '<a href="' . esc_url( 'http://themes4wp.com/product/maxstore-pro/' ) . '" target="_blank" class="button button-primary">' . sprintf( esc_html__( 'Learn more about %s PRO', 'thestore' ), 'MaxStore' ) . '</a>',
  	'priority'		 => 10,
  ) );