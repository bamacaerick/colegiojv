<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<div class="article-exposition-body">
    <div class="article-exposition-thumbnail">
        <?php if($featured_img_url) :?>   
            <img src="<?php echo $featured_img_url; ?>" alt="">
        <?php else: ?>
            <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-2.jpg" alt="" />
        <?php endif; ?>
    </div>
    <div class="article-exposition-content">
        <span class="article-exposition-content-date d-block"><?php echo get_the_date(); ?></span>
        <h3 class="article-exposition-content-heading text-uppercase">
            <a href="<?php the_permalink(); ?>" class="text-pink">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="article-exposition-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 34); ?></p>
        <div class="article-exposition-permalink text-end">
            <a href="<?php the_permalink(); ?>" class="article-exposition-permalink-anchor text-pink"><span class="sr-only">Read more</span>...</a>
        </div>
    </div>
</div>