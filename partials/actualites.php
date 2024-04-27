<?php
// query recent blog post
$getActualites = new WP_Query(array(
    'category_name' => 'actualites',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($getActualites->have_posts()): ?>
    <div class="article-actualites">
        <div class="article-actualites-header">
            <h2 class="article-actualites-header-heading text-uppercase text-center pt-sans-narrow-bold text-gray-200 h1"><span class="hexagon">Actualités</span></h2>
        </div>
        <?php while ($getActualites->have_posts()): $getActualites->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="article-actualites-body">
                <div class="row">
                    <div class="col-12 col-md-auto">
                        <div class="article-actualites-thumbnail">
                            <?php if($featured_img_url) :?>   
                              <img src="<?php echo $featured_img_url; ?>" alt="">
                            <?php else: ?>
                              <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-1.jpg" alt="" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="article-actualites-content">
                            <span class="d-block text-black fw-bold"><?php echo get_the_date(); ?></span>
                            <h3 class="text-green text-uppercase"><?php the_title(); ?></h3>
                            <p class="text-gray-body m-0"><?php echo get_the_excerpt(); ?></p>
                            <div class="article-actualites-permalink text-end">
                                <a href="<?php the_permalink(); ?>" class="article-actualites-permalink-anchor text-green fs-50"><span class="sr-only">Read more</span>...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="article-actualites-archive text-end">
            <a href="#" class="article-actualites-archive-anchor">> Lire toutes les actualités</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
