<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<div class="article-actualites-body">
    <div class="row">
        <div class="col-12 col-md-auto">
            <div class="article-actualites-thumbnail">
                <?php if($featured_img_url) :?>   
                    <img src="<?php echo $featured_img_url; ?>" alt="">
                <?php else: ?>
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-1.jpg" alt="" />
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-md">
            <div class="article-actualites-content">
                <span class="d-block text-black fw-bold"><?php echo get_the_date(); ?></span>
                <h3 class="text-green text-uppercase"><a href="<?php the_permalink(); ?>" class="text-green"><?php the_title(); ?></a></h3>
                <p class="text-gray-body m-0"><?php echo get_the_excerpt(); ?></p>
                <div class="article-actualites-permalink text-end">
                    <a href="<?php the_permalink(); ?>" class="article-actualites-permalink-anchor text-green fs-50"><span class="sr-only">Read more</span>...</a>
                </div>
            </div>
        </div>
    </div>
</div>