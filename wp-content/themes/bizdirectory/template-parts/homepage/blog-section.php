<?php
$bizdirectory_options = bizdirectory_theme_options();

$blog_sec_title = $bizdirectory_options['blog_sec_title'];
$blog_sec_sub_title = $bizdirectory_options['blog_sec_sub_title'];
$posts_count = $bizdirectory_options['blog_post_no'];

?>
<div class="blog-section section-spacing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-headings">
                  		<?php
                        if ($blog_sec_title)
                            echo '<h2>' . esc_html($blog_sec_title) . '</h2>';

                        if ($blog_sec_sub_title)
                            echo '<span>' . esc_html($blog_sec_sub_title) . '</span>';
                        ?>
				</div>
				<div class="col-md-12">
					<?php 

        $loop = ($posts_count<=0)?30:$posts_count;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => esc_attr($loop),
                'post_status' => 'publish',
                'order' => 'desc',
                'orderby' => 'menu_order date',
            );

        $query = new \WP_Query($args);

         if ($query->have_posts()):
            ?>
            <div class="blog-element">
                        <?php
                        while ($query->have_posts()) : $query->the_post();
                            global $post;
                            $post_format = get_post_format($post->ID);
                            $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
                            $image = wp_get_attachment_image_src($post_thumbnail_id, 'bizdirectory-blog-thumbnail-img');
                            $content = get_the_content();
  

                            if (!empty($image)) {
                                $image_style = "style='background-image:url(" . esc_url($image[0]) . ")'";
                            } else {
                                $image_style = '';
                            }

                            if($loop>=1) :
                                ?>
                                <article class="blog-post">
                                    <div class="blog-img">
                                    <img src="<?php echo esc_url($image[0]); ?>" alt="" />

                                    <?php    
                                    $blog_year  = get_the_time('Y');
                                    $blog_month = get_the_time('m');

                                    ?>

                                    <?php echo '<div class="date"><a href="'.esc_url(get_month_link($blog_year,$blog_month)).'"><span>'.esc_html(get_the_date()).'</span></a></div>'; ?>
                                      </div>
                                    <div class="post-content">
                                    <h3 class="entry-title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h3>

                                            <?php
                                         
                
                                            
                                            ?>
                                            <p class="post-excerpt"><?php echo wp_kses_post(bizdirectory_get_excerpt(get_the_ID(), 125)); ?></p>
                                        </div>
                                    </article>
                                <?php $loop--; endif; endwhile;
                        wp_reset_postdata(); ?>
                    </div>
        <?php endif;


                        ?>
				</div>
			</div>
		</div>
	</div>
</div>
