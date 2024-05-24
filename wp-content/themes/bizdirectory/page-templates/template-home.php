<?php
/**
 *
 * Template Name: Home Page Template

 *
 * @package BizDirectory
 */
 
get_header();

$bizdirectory_options = bizdirectory_theme_options();
$listing_sec_show = $bizdirectory_options['listing_sec_show'];
$cta_sec_show = $bizdirectory_options['cta_sec_show'];
$blog_sec_show = $bizdirectory_options['blog_sec_show'];


get_template_part('template-parts/homepage/banner', 'section');

if($listing_sec_show == 1)
get_template_part('template-parts/homepage/listing', 'section');

if($cta_sec_show == 1)
get_template_part('template-parts/homepage/cta', 'section');

if($blog_sec_show == 1)
get_template_part('template-parts/homepage/blog', 'section');


get_footer();
