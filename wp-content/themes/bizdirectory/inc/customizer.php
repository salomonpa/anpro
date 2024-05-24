<?php
/**
 * bizdirectory Theme Customizer
 *
 * @package bizdirectory
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bizdirectory_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$bizdirectory_options = bizdirectory_theme_options();

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bizdirectory_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bizdirectory_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_panel(
        'theme_options',
        array(
            'title' => esc_html__('Theme Options', 'bizdirectory'),
            'priority' => 2,
        )
    );

//Social Links
    $wp_customize->add_section(
    'social_section',
	    array(
	        'title' => esc_html__( 'Social Links','bizdirectory' ),
	        'description' => esc_html__( 'More Social links available in Pro Version','bizdirectory' ),
	        'panel'=>'theme_options',
	        'capability'=>'edit_theme_options',
	    )
	);
	$wp_customize->add_setting('bizdirectory_theme_options[fb_url]',
	    array(
	        'type' => 'option',
	        'default' => $bizdirectory_options['fb_url'],
	        'sanitize_callback' => 'bizdirectory_sanitize_url',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[fb_url]',
	    array(
	        'label' => esc_html__('Facebook Link', 'bizdirectory'),
	        'type' => 'text',
	        'section' => 'social_section',
	        'settings' => 'bizdirectory_theme_options[fb_url]',
	    )
	);
		$wp_customize->add_setting('bizdirectory_theme_options[youtube_url]',
	    array(
	        'type' => 'option',
	        'default' => $bizdirectory_options['youtube_url'],
	        'sanitize_callback' => 'bizdirectory_sanitize_url',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[youtube_url]',
	    array(
	        'label' => esc_html__('Youtube Link', 'bizdirectory'),
	        'type' => 'text',
	        'section' => 'social_section',
	        'settings' => 'bizdirectory_theme_options[youtube_url]',
	    )
	);



//Banner section
    $wp_customize->add_section(
    'banner_section',
	    array(
	        'title' => esc_html__( 'Banner Section','bizdirectory' ),
	        'panel'=>'theme_options',
	        'capability'=>'edit_theme_options',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[banner_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['banner_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[banner_title]',
	    array(
	        'label' => esc_html__('Banner Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'banner_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[banner_sub_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['banner_sub_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[banner_sub_title]',
	    array(
	        'label' => esc_html__('Banner Sub Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'banner_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[banner_image]',
	array(
	    'type' => 'option',
	    'sanitize_callback' => 'esc_url_raw',
	)
	);
	$wp_customize->add_control(
	new WP_Customize_Image_Control(
	    $wp_customize,
	    'bizdirectory_theme_options[banner_image]',
	    array(
	        'label' => esc_html__('Add Background Image', 'bizdirectory'),
	        'section' => 'banner_section',
	        'settings' => 'bizdirectory_theme_options[banner_image]',
	    ))
	);

    //Listing section
	$wp_customize->add_section(
    'listing_section',
	    array(
	        'title' => esc_html__( 'Listing Section','bizdirectory' ),
	        'panel'=>'theme_options',
	        'capability'=>'edit_theme_options',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[listing_sec_show]',
	    array(
	        'type' => 'option',
	        'default'        => true,
	        'default' => $bizdirectory_options['listing_sec_show'],
	        'sanitize_callback' => 'bizdirectory_sanitize_checkbox',
	    )
	);

	$wp_customize->add_control('bizdirectory_theme_options[listing_sec_show]',
	    array(
	        'label' => esc_html__('Show Listing Section', 'bizdirectory'),
	        'type' => 'Checkbox',
	        'priority' => 1,
	        'section' => 'listing_section',

	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[listing_sec_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['listing_sec_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[listing_sec_title]',
	    array(
	        'label' => esc_html__('Section Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'listing_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[listing_sec_sub_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['listing_sec_sub_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[listing_sec_sub_title]',
	    array(
	        'label' => esc_html__('Section Sub Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'listing_section',
	        'type' => 'text',
	    )
	);



    //CTA section
	$wp_customize->add_section(
    'cta_section',
	    array(
	        'title' => esc_html__( 'Call to Action Section','bizdirectory' ),
	        'panel'=>'theme_options',
	        'capability'=>'edit_theme_options',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[cta_sec_show]',
	    array(
	        'type' => 'option',
	        'default'        => true,
	        'default' => $bizdirectory_options['cta_sec_show'],
	        'sanitize_callback' => 'bizdirectory_sanitize_checkbox',
	    )
	);

	$wp_customize->add_control('bizdirectory_theme_options[cta_sec_show]',
	    array(
	        'label' => esc_html__('Show CTA Section', 'bizdirectory'),
	        'type' => 'Checkbox',
	        'priority' => 1,
	        'section' => 'cta_section',

	    )
	);


	$wp_customize->add_setting('bizdirectory_theme_options[cta_sec_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['cta_sec_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[cta_sec_title]',
	    array(
	        'label' => esc_html__('CTA Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'cta_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[cta_sec_sub_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['cta_sec_sub_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[cta_sec_sub_title]',
	    array(
	        'label' => esc_html__('CTA Sub Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'cta_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[cta_btn_text]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['cta_btn_text'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[cta_btn_text]',
	    array(
	        'label' => esc_html__('CTA Button Text', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'cta_section',
	        'type' => 'text',
	    )
	);
	$wp_customize->add_setting('bizdirectory_theme_options[cta_button_url]',
	    array(
	        'type' => 'option',
	        'default' => $bizdirectory_options['cta_button_url'],
	        'sanitize_callback' => 'bizdirectory_sanitize_url',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[cta_button_url]',
	    array(
	        'label' => esc_html__('CTA Button Link', 'bizdirectory'),
	        'type' => 'text',
	        'section' => 'cta_section',
	        'settings' => 'bizdirectory_theme_options[cta_button_url]',
	    )
	);
	$wp_customize->add_setting('bizdirectory_theme_options[cta_image]',
	array(
	    'type' => 'option',
	    'sanitize_callback' => 'esc_url_raw',
	)
	);
	$wp_customize->add_control(
	new WP_Customize_Image_Control(
	    $wp_customize,
	    'bizdirectory_theme_options[cta_image]',
	    array(
	        'label' => esc_html__('Add Background Image', 'bizdirectory'),
	        'section' => 'cta_section',
	        'settings' => 'bizdirectory_theme_options[cta_image]',
	    ))
	);


    //Blog section
	$wp_customize->add_section(
    'blog_section',
	    array(
	        'title' => esc_html__( 'Blog Section','bizdirectory' ),
	        'panel'=>'theme_options',
	        'capability'=>'edit_theme_options',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[blog_sec_show]',
	    array(
	        'type' => 'option',
	        'default'        => true,
	        'default' => $bizdirectory_options['blog_sec_show'],
	        'sanitize_callback' => 'bizdirectory_sanitize_checkbox',
	    )
	);

	$wp_customize->add_control('bizdirectory_theme_options[blog_sec_show]',
	    array(
	        'label' => esc_html__('Show Blog Section', 'bizdirectory'),
	        'type' => 'Checkbox',
	        'priority' => 1,
	        'section' => 'blog_section',

	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[blog_sec_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['blog_sec_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[blog_sec_title]',
	    array(
	        'label' => esc_html__('Section Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'blog_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[blog_sec_sub_title]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['blog_sec_sub_title'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[blog_sec_sub_title]',
	    array(
	        'label' => esc_html__('Section Sub Title', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'blog_section',
	        'type' => 'text',
	    )
	);

	$wp_customize->add_setting('bizdirectory_theme_options[blog_post_no]',
	    array(
	        'capability' => 'edit_theme_options',
	        'default' => $bizdirectory_options['blog_post_no'],
	        'sanitize_callback' => 'sanitize_text_field',
	        'type' => 'option',
	    )
	);
	$wp_customize->add_control('bizdirectory_theme_options[blog_post_no]',
	    array(
	        'label' => esc_html__('No Of Blog Posts to show?', 'bizdirectory'),
	        'priority' => 1,
	        'section' => 'blog_section',
	        'type' => 'text',
	    )
	);

}
add_action( 'customize_register', 'bizdirectory_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bizdirectory_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bizdirectory_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bizdirectory_customize_preview_js() {
	wp_enqueue_script( 'bizdirectory-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'bizdirectory_customize_preview_js' );
