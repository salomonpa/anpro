<?php
$bizdirectory_options = bizdirectory_theme_options();

$banner_title = $bizdirectory_options['banner_title'];
$banner_sub_title = $bizdirectory_options['banner_sub_title'];
$banner_image = $bizdirectory_options['banner_image'];
$directorist_active = in_array('directorist/directorist-base.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;

if(!empty($banner_image)){
  $background_img = "style='background-image:url(".esc_url($banner_image).")'";
}
else{
  $background_img = '';
}

?>
<div class="banner-section section-overlay" <?php echo wp_kses_post($background_img); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
                  		<?php
                        if ($banner_title)
                            echo '<h1>' . esc_html($banner_title) . '</h1>';

                        if ($banner_sub_title)
                            echo '<span>' . esc_html($banner_sub_title) . '</span>';

				          if($directorist_active){
				          echo do_shortcode('[directorist_search_listing more_filters_button="no" show_title_subtitle="no"]'); } 
                        ?>
			</div>
		</div>
	</div>
</div>