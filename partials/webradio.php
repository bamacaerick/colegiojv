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
            <h2 class="article-webradio-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Media</h2>
        </div>
        <?php while ($getWebradio->have_posts()): $getWebradio->the_post(); ?>
            <?php get_template_part('partials/webradio-list'); ?>
        <?php endwhile; ?>
        <div class="article-webradio-archive text-end">
            <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('webradio');

                // Get the URL of this category
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo $category_link; ?>" class="article-webradio-archive-anchor">> Ver todos los artículos</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
