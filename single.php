<?php get_header(); ?>
<main id="content" role="main" class="singular-content row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-12 col-lg-8">
        <?php get_template_part('entry-actualites'); ?>
    </div>
    <?php endwhile; endif; ?>
    <div class="col-12 col-lg-4">
        <?php get_sidebar('special'); ?>
        <?php get_sidebar('boxes'); ?>
        <?php if (is_active_sidebar('primary-widget-area')) : ?>
            <div id="primary" class="widget-area">
                <ul class="widget-area-list">
                    <?php dynamic_sidebar('primary-widget-area'); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php get_sidebar('post'); ?>
    </div>
</main>
<?php get_footer(); ?>