<?php
// query recent evenements post
$getEvenements = new WP_Query(array(
    'category_name' => 'evenements',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getEvenements->have_posts()): ?>
    <div class="article-evenements">
        <div class="article-evenements-header bg-fuscia">
            <h2 class="article-evenements-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Événements</h2>
        </div>
        <?php while ($getEvenements->have_posts()): $getEvenements->the_post(); ?>
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
                    <h3 class="article-evenements-content-heading text-uppercase"><?php the_title(); ?></h3>
                    <p class="article-evenements-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 34); ?></p>
                    <div class="article-evenements-permalink text-end">
                        <a href="<?php the_permalink(); ?>" class="article-evenements-permalink-anchor text-green"><span class="sr-only">Read more</span>...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="article-evenements-archive text-end">
            <a href="#" class="article-evenements-archive-anchor">> Voir tous les evenements</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
