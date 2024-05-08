<?php 
    /**
     * Template Name: Homepage
     */
    get_header(); 
?>
<main id="content" role="main">
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
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/evenements'); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/exposition'); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/webradio'); ?>
        </div>
    </div>
    <div class="row stats">
        <div class="stats-cover"></div>
        <div class="col-12 col-lg-4">
            <div class="stats-eleve text-center">
                <p class="h1 m-0">1000</p>
                <span>___</span>
                <p class="stats-margin">Alumnos</p>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="stats-abroad text-center">
                <p class=" h1 m-0">81%</p>
                <span>___</span>
                <p class="stats-margin">De nuestros alumnos siguen sus estudios al extranjero</p>
            </div>
        </div>
        <div class="col-12 col-lg-4">
             <div class="stats-personal text-center">
                <p class="h1 m-0">126</p>
                <span>___</span>
                <p class="stats-margin">Miembros del personal</p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>