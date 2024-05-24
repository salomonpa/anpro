<?php
if (!function_exists('bizdirectory_theme_options')) :
    function bizdirectory_theme_options()
    {
        $defaults = array(
            'fb_url' => '',
            'youtube_url' => '',
            //Banner section
            'banner_title' => '',
            'banner_sub_title' => '',
            'banner_image' => '',

            //Listing section
            'listing_sec_show' => 1,
            'listing_sec_title' => '',
            'listing_sec_sub_title' => '',
            'listing_post_no' => '',

            //CTA section
            'cta_sec_show' => 1,
            'cta_sec_title' => '',
            'cta_sec_sub_title' => '',
            'cta_btn_text' => '',
            'cta_button_url' => '',
            'cta_image' => '',

            //Blog section
            'blog_sec_show' => 1,
            'blog_sec_title' => '',
            'blog_sec_sub_title' => '',
            'blog_post_no' => '',
        
        );

        $options = get_option('bizdirectory_theme_options', $defaults);

        $options = wp_parse_args($options, $defaults);

        return $options;
    }
endif;
