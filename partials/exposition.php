<?php
    // query recent exposition post
    $getExposition = new WP_Query(array(
        'category_name' => 'exposition',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
?>

<?php if ($getExposition->have_posts()): ?>
    <div class="article-exposition">
        <div class="article-exposition-header bg-pink">
            <h2 class="article-exposition-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Espacio exposición</h2>
        </div>
        <?php while ($getExposition->have_posts()): $getExposition->the_post(); ?>
            <?php get_template_part('partials/exposition-list'); ?>
        <?php endwhile; ?>
        <div class="article-exposition-archive text-end">
            <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Espace exposition');

                // Get the URL of this category
                $category_link = get_category_link($category_id);
                ?>
            <a href="<?php echo $category_link; ?>" class="article-exposition-archive-anchor">> Ver todos las expos</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
