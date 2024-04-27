<?php
// query recent webratio post
$getWebradio = new WP_Query(array(
    'category_name' => 'webradio',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getWebradio->have_posts()): ?>
    <div class="article-webradio">
        <div class="article-webradio-header bg-green-light">
            <h2 class="article-webradio-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Webradio LE QUETZAL INFORMÉ</h2>
        </div>
        <?php while ($getWebradio->have_posts()): $getWebradio->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="article-webradio-body">
                <div class="article-webradio-content">
                    <h3 class="article-webradio-content-heading text-green-light m-0"><?php the_title(); ?></h3>
                    <span class="d-block article-webradio-content-time">Dureé: 2'28</span>
                    <p class="article-webradio-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 26); ?></p>
                    <div class="article-webradio-permalink text-end">
                        <a href="<?php the_permalink(); ?>" class="article-webradio-permalink-anchor text-green-light"><span class="sr-only">Read more</span>...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="article-webradio-archive text-end">
            <a href="#" class="article-webradio-archive-anchor">Voir tous les articles</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
