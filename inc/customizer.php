<?php
/**
 * butterfly Theme Customizer
 *
 * @package butterfly
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function butterfly_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'butterfly_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'butterfly_customize_partial_blogdescription',
		) );
	}


    if (class_exists('WP_Customize_Panel')):
        $wp_customize->add_panel('butterfly_panel', array(
            'priority' => 7,
            'capability' => 'edit_theme_options',
            'title' => __('Theme Settings', 'butterfly'),
        	'description' => __( 'Butterfly Theme settings', 'butterfly' )
        ));


		//  ===================================
        //  ====     Header      ====
        //  ===================================
        $wp_customize->add_section('butterfly_social_controls', array(
            'title' => __('Social link', 'butterfly'),
            'panel' => 'butterfly_panel',
            'priority' => 5,
        ));

        $wp_customize->add_setting('butterfly_facebook', array(
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'esc_url',
            'default' => '#'
        ));
        $wp_customize->add_control('butterfly_facebook', array(
            'label' => __('Facebook: ', 'butterfly'),
            'settings' => 'butterfly_facebook',
            'section' => 'butterfly_social_controls',
            'type' => 'text',
        ));

                $wp_customize->add_setting('butterfly_youtube', array(
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'esc_url',
            'default' => '#'
        ));
        $wp_customize->add_control('butterfly_youtube', array(
            'label' => __('Youtube: ', 'butterfly'),
            'settings' => 'butterfly_youtube',
            'section' => 'butterfly_social_controls',
            'type' => 'text',
        ));



    else:
        $wp_customize->add_section('oh_shit', array(
            'priority' => 6,
            'title' => __('Oh Shit!', 'butterfly'),
            'description' => __('WP_Customize_Panel class not exist. Contact with your admin', 'butterfly')
        ));
    endif;









}
add_action( 'customize_register', 'butterfly_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function butterfly_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function butterfly_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function butterfly_customize_preview_js() {
	wp_enqueue_script( 'butterfly-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'butterfly_customize_preview_js' );
