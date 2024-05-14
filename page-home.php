<?php 
    /**
     * Template Name: Homepage
     */
    get_header(); 
?>
<main id="content" role="main">
    <div class="row bg-dark-blue values-section">
        <div class="col-12">
            <p class="h2 text-center text-white pt-sans-narrow-bold">Nuestros valores</p>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">Recorrido ciudadano</span>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">Recorrido futuro</span>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">Recorrido artístico y cultural</span>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">EFE3D</span>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">Valores AEFE</span>
        </div>
        <div class="col-6 col-lg-4 text-center">
            <span class="text-white values-section-item">Enseñanza</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <?php get_template_part('partials/actualites'); ?>
        </div>
        <div class="col-12 col-lg-4 pt-50">
            <?php get_sidebar('boxes'); ?>
            <?php if (is_active_sidebar('primary-widget-area')) : ?>
                <div id="primary" class="widget-area">
                    <ul class="widget-area-list">
                        <?php dynamic_sidebar('primary-widget-area'); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php get_template_part('partials/evenements'); ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php get_template_part('partials/exposition'); ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php get_template_part('partials/webradio'); ?>
        </div>
    </div>
    <?php get_template_part('partials/cards'); ?>
    <?php get_template_part('partials/stats'); ?>
</main>
<?php get_footer(); ?>