<?php
$bizdirectory_options = bizdirectory_theme_options();

$listing_sec_title = $bizdirectory_options['listing_sec_title'];
$listing_sec_sub_title = $bizdirectory_options['listing_sec_sub_title'];
$directorist_active = in_array('directorist/directorist-base.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;

?>
<div class="listing-section section-spacing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-headings">
                  		<?php
                        if ($listing_sec_title)
                            echo '<h2>' . esc_html($listing_sec_title) . '</h2>';

                        if ($listing_sec_sub_title)
                            echo '<span>' . esc_html($listing_sec_sub_title) . '</span>';
                        ?>
				</div>
				<div class="col-md-12">
					<?php if($directorist_active){
				          echo do_shortcode('[directorist_all_listing view="grid" listings_per_page="6" header="no" columns="3" advanced_filter="no" show_pagination="no"]'); } 
                        ?>
				</div>
			</div>
		</div>
	</div>
</div>
