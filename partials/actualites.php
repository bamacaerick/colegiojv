<?php
// query recent evenements post
$getEvenements = new WP_Query(array(
    'category_name' => 'actualites',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getEvenements->have_posts()): ?>
    <div class="article-blue mb-5">
        <div class="article-blue-header bg-dark-blue">
            <h2 class="article-blue-header-heading pt-sans-narrow-bold text-uppercase h3 m-0 text-white">Actualidad</h2>
        </div>
        <?php while ($getEvenements->have_posts()): $getEvenements->the_post(); ?>
            <?php get_template_part('partials/evenements-list'); ?>
        <?php endwhile; ?>
        <div class="article-blue-archive text-end">
            <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('actualites');

    // Get the URL of this category
    $category_link = get_category_link($category_id);
    ?>
            <a href="<?php echo $category_link; ?>" class="article-blue-archive-anchor">> Ver toda la actualidad</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
