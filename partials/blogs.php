<?php
    // query recent blog post
    $getBlogs = new WP_Query(array(
        'category_name' => 'blog',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
?>

<?php if ($getBlogs->have_posts()): ?>
    <div class="article-blogs">
        <div class="article-blogs-header bg-pink">
            <h2 class="article-blogs-header-heading pt-sans-narrow-bold text-uppercase h3 m-0">Blogs des classes</h2>
        </div>
        <?php while ($getBlogs->have_posts()): $getBlogs->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="article-blogs-body">
                <div class="article-blogs-thumbnail">
                    <?php if($featured_img_url) :?>   
                      <img src="<?php echo $featured_img_url; ?>" alt="">
                    <?php else: ?>
                      <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/image-placeholder-2.jpg" alt="" />
                    <?php endif; ?>
                </div>
                <div class="article-blogs-content">
                    <span class="article-blogs-content-date d-block"><?php echo get_the_date(); ?></span>
                    <h3 class="article-blogs-content-heading text-uppercase"><?php the_title(); ?></h3>
                    <p class="article-blogs-content-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 34); ?></p>
                    <div class="article-blogs-permalink text-end">
                        <a href="<?php the_permalink(); ?>" class="article-blogs-permalink-anchor text-pink"><span class="sr-only">Read more</span>...</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="article-blogs-archive text-end">
            <a href="#" class="article-blogs-archive-anchor">> Voir tous les blogs</a>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
