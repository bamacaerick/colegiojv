<?php
$currentID = get_the_ID();

// query recent blog post
$getActualites = new WP_Query(array(
    'category_name' => 'actualites',
    'posts_per_page' => 1,
    'post__not_in' => array(
         $currentID),
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getActualites->have_posts()): ?>
    <div class="sidebar-actualites-heading">
        <h3 class="sidebar-actualites-heading-tag pt-sans-narrow-bold text-uppercase">Actualidad reciente</h3>
    </div>
    <div class="sidebar-actualites">
        <?php while ($getActualites->have_posts()): $getActualites->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="col-12 col-md-auto">
                <div class="sidebar-actualites-thumbnail">
                    <?php if($featured_img_url) :?>   
                        <img src="<?php echo $featured_img_url; ?>" alt="">
                    <?php else: ?>
                        <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-1.jpg" alt="" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="sidebar-actualites-content">
                    <span class="d-block text-black fw-bold fs-body-small"><?php echo get_the_date(); ?></span>
                    <p class="h5 text-uppercase sidebar-actualites-content-heading"><a href="<?php the_permalink(); ?>" class="text-green"><?php the_title(); ?></a></p>
                    <p class="text-gray-body fs-body-small m-0"><?php echo get_the_excerpt(); ?></p>
                    <div class="sidebar-actualites-permalink text-end">
                        <a href="<?php the_permalink(); ?>" class="sidebar-actualites-permalink-anchor text-green"><span class="sr-only">Read more</span>...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>