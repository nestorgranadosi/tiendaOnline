<?php
/**
*
* Metaboxes
*
*/

add_action( 'cmb2_init', 'thestore_homepage_template_metaboxes' );

function thestore_homepage_template_metaboxes() {

    $prefix = 'maxstore';
    
    $cmb_slider = new_cmb2_box( array(
        'id'            => 'homepage_metabox_slider',
        'title'         => __( 'Homepage Options', 'thestore' ),
        'object_types'  => array( 'page' ), // Post type 
        'show_on'       => array( 'key' => 'page-template', 'value' => array('template-home-slider.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb_slider->add_field( array(
        'name'   => __( 'Slider', 'thestore' ),
    		'desc'   => __( 'Enable or disable slider.', 'thestore' ),
    		'id'     => $prefix .'_slider_on',
    		'default' => 'off',
        'type'    => 'radio_inline',
        'options' => array(
            'off'   => __( 'Off', 'thestore' ),
            'fullwidth' => __( 'On', 'thestore' ),
        ),
    ) );
    $group_field_id = $cmb_slider->add_field( array(
		'id'          => $prefix .'_home_slider',
		'type'        => 'group',
		'description' => __( 'Generate slider', 'thestore' ),
		'options'     => array(
			'group_title'   => __( 'Slide {#}', 'thestore' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add another slide', 'thestore' ),
			'remove_button' => __( 'Remove slide', 'thestore' ),
			'sortable'      => true, 
		),
  	) );
    $cmb_slider->add_group_field( $group_field_id, array(
  		'name'   => __( 'Image', 'thestore' ),
  		'id'     => $prefix .'_image',
  		'description' => __( 'Ideal image size: 1140x488px', 'thestore' ),
  		'type' => 'file',
      'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
  	) );
  	$cmb_slider->add_group_field( $group_field_id, array(
  		'name'   => __( 'Slider Title', 'thestore' ),
  		'id'     => $prefix .'_title',
  		'type'   => 'text',
  	) );
  	$cmb_slider->add_group_field( $group_field_id, array(
  		'name' => __( 'Slider Description', 'thestore' ),
  		'id'   => $prefix .'_desc',
  		'type' => 'textarea_code',
  	) );
  	$cmb_slider->add_group_field( $group_field_id, array(
  		'name' => __( 'Button Text', 'thestore' ),
  		'id'   => $prefix .'_button_text',
  		'type' => 'text',
  	) );
  	$cmb_slider->add_group_field( $group_field_id, array(
  		'name' => __( 'Button URL', 'thestore' ),
  		'id'   => $prefix .'_url',
  		'type' => 'text_url',
  	) );
}
