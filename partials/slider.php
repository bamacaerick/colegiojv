<?php
$args = array(
'post_type' => 'slider',
'posts_per_page' => -1,
'orderby' => 'menu_order',
'order' => 'ASC',
);

$sliderPost = new WP_Query($args);
if($sliderPost->post_count > 0) : ?>
    <?php if ($sliderPost->have_posts()): ?>
      <div class="slider-home row">
        <div class="col-12 p-0">
          <div class="swiper-container homeSwiper">
            <div class="swiper-wrapper">
              <?php while ($sliderPost->have_posts()): $sliderPost->the_post(); ?>
                <?php
                  if (has_post_thumbnail()) {
                      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                  } else {
                      $featured_img_url = get_bloginfo('template_directory').'/images/header-default-image.jpg';
                  }
                  ?>
                <div class="swiper-slide" style="background-image: url(<?php echo $featured_img_url; ?>)">
                    <div class="swiper-slide-content">
                        <p class="pt-sans-narrow-bold h4 text-uppercase"><?php echo get_the_title(); ?></p>
                        <p class="m-0"><?php echo get_the_content(); ?></p>
                    </div>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class="swiper-pagination text-end"></div>
        </div>
      </div>
    <?php endif; ?> 
  <?php endif;

/* Restore original Post Data */
wp_reset_postdata();
?>