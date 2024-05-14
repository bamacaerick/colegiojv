<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<div class="article-webradio-body">
    <div class="article-webradio-content">
        <h3 class="article-webradio-content-heading text-green-light m-0">
            <a href="<?php the_permalink(); ?>" class="text-green-light">
                <?php the_title(); ?>
            </a>
        </h3>
        <span class="d-block article-webradio-content-time">Duración: 2'28</span>
        <p class="article-webradio-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 26); ?></p>
        <div class="article-webradio-permalink text-end">
            <a href="<?php the_permalink(); ?>" class="article-webradio-permalink-anchor text-green-light"><span class="sr-only">Read more</span>...</a>
        </div>
    </div>
</div>