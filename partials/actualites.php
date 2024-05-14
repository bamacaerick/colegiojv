<?php
// query recent blog post
$getActualites = new WP_Query(array(
    'category_name' => 'actualites',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getActualites->have_posts()): ?>
    <div class="article-actualites">
        <div class="article-actualites-header">
            <h2 class="article-actualites-header-heading text-uppercase text-center pt-sans-narrow-bold text-gray-200 h1"><span class="hexagon">Actualidad</span></h2>
        </div>
        <?php while ($getActualites->have_posts()): $getActualites->the_post(); ?>
            <?php get_template_part('partials/actualites-list'); ?>
        <?php endwhile; ?>
        <div class="article-actualites-archive text-end">
            <?php 
                // Get the ID of a given category
                $category_id = get_cat_ID('actualites');

                // Get the URL of this category
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo $category_link; ?>" class="article-actualites-archive-anchor">> Leer toda la actualidad</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
