<?php 
    /**
     * Template Name: Homepage
     */
    get_header(); 
?>
<main id="content" role="main">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php get_template_part('partials/actualites'); ?>
        </div>
        <div class="col-12 col-md-4 pt-50">
            <div class="sidebar-home">
                <a href="#" class="sidebar-home-anchor pt-sans-narrow-bold bg-gray-100">
                    <span class="sidebar-home-anchor-span text-uppercase">Inscriptions</span>
                </a>
                <a href="#" class="sidebar-home-anchor pt-sans-narrow-bold bg-gray-100">
                    <span class="sidebar-home-anchor-span text-uppercase">Pronote/ONE/NEO</span>
                </a>
                <a href="#" class="sidebar-home-anchor pt-sans-narrow-bold bg-gray-100">
                    <span class="sidebar-home-anchor-span text-uppercase">Recrutement</span>
                </a>
                <a href="#" class="sidebar-home-anchor pt-sans-narrow-bold bg-gray-100">
                    <span class="sidebar-home-anchor-span text-uppercase">CDI</span>
                </a>
                <div class="tweets">
                    <span>FB feed</span>
                </div>
            </div>
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
</main>
<?php get_footer(); ?>