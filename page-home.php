<?php 
    /**
     * Template Name: Homepage
     */
    get_header(); 
?>
<main id="content" role="main">
    <?php get_template_part('partials/our-values'); ?>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="row mt-5">
                <div class="col-12 col-lg-6">
                    <?php get_template_part('partials/actualites'); ?>
                </div>
                <div class="col-12 col-lg-6">
                    <?php get_template_part('partials/evenements'); ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <?php get_sidebar('boxes'); ?>
            <?php if (is_active_sidebar('primary-widget-area')) : ?>
                <div id="primary" class="widget-area">
                    <ul class="widget-area-list">
                        <?php dynamic_sidebar('primary-widget-area'); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php get_sidebar('social'); ?>
        </div>
    </div>
    <?php //get_template_part('partials/cards'); ?>
    <?php get_template_part('partials/stats'); ?>
</main>
<?php get_footer(); ?>