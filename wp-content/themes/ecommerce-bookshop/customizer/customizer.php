<?php

function ecommerce_bookshop_remove_customize_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'author_writer_bar_icon_link' );
    $wp_customize->remove_control( 'author_writer_bar_icon_link' );
    $wp_customize->remove_setting( 'author_writer_secondary_color_option' );
    $wp_customize->remove_control( 'author_writer_secondary_color_option' );
    $wp_customize->remove_section( 'author_writer_color_option' );
   
    
}
add_action( 'customize_register', 'ecommerce_bookshop_remove_customize_register', 11 );

function ecommerce_bookshop_customize_register( $wp_customize ) {
    // Register the custom control type.
	$wp_customize->register_control_type( 'Ecommerce_Bookshop_Toggle_Control' );
	

	$wp_customize->add_section( 'ecommerce_bookshop_workshop_section' , array(
    	'title'      => __( 'Latest Event Settings', 'ecommerce-bookshop' ),
		  'panel' => 'author_writer_panel_id',
		  'priority' => 9,
	) );

     $wp_customize->add_setting( 'ecommerce_bookshop_contact_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'author_writer_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Ecommerce_Bookshop_Toggle_Control( $wp_customize, 'ecommerce_bookshop_contact_show_hide', array(
		'label'       => esc_html__( 'Show / Hide for  Announcement Text', 'ecommerce-bookshop' ),
		'section'     => 'author_writer_topbar',
		'type'        => 'toggle',
		'settings'    => 'ecommerce_bookshop_contact_show_hide',
	) ) );


}
add_action( 'customize_register', 'ecommerce_bookshop_customize_register' );
