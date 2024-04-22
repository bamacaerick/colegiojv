<?php
// query recent webratio post
$getBlogs = new WP_Query(array(
    'category_name' => 'webradio',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getBlogs->have_posts()): ?>
    <div class="article article-blogs">
        <div class="article-header">
            <h2>Webradio</h2>
        </div>
        <?php while ($getBlogs->have_posts()): $getBlogs->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="article-body">
                <div class="article-content">
                    <span class="d-block"><?php the_date(); ?></span>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <div class="article-permalink">
                        <a href="<?php the_permalink(); ?>"><span class="sr-only">Read more</span>...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="article-archive">
            <a href="#">Voir tous les articles</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
