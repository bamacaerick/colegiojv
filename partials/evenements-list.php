<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<div class="article-evenements-body">
    <div class="article-evenements-thumbnail">
        <?php if($featured_img_url) :?>   
            <img src="<?php echo $featured_img_url; ?>" alt="">
        <?php else: ?>
            <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-2.jpg" alt="" />
        <?php endif; ?>
    </div>
    <div class="article-evenements-content">
        <span class="d-block article-evenements-content-date"><?php echo get_the_date(); ?></span>
        <h3 class="article-evenements-content-heading text-uppercase">
            <a href="<?php the_permalink(); ?>" class="text-red"> 
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="article-evenements-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 34); ?></p>
        <div class="article-evenements-permalink text-end">
            <a href="<?php the_permalink(); ?>" class="article-evenements-permalink-anchor text-red"><span class="sr-only">Read more</span>...</a>
        </div>
    </div>
</div>