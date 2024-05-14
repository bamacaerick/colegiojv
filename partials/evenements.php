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
            <h2 class="article-evenements-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Eventos</h2>
        </div>
        <?php while ($getEvenements->have_posts()): $getEvenements->the_post(); ?>
            <?php get_template_part('partials/evenements-list'); ?>
        <?php endwhile; ?>
        <div class="article-evenements-archive text-end">
            <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('evenements');

                // Get the URL of this category
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo $category_link; ?>" class="article-evenements-archive-anchor">> Ver todos los eventos</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
