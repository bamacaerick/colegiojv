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
        <div class="col-12 col-md-4">
            <a href="#" class="d-block bg-gray-100 mb-4">
                <span class="text-uppercase">Inscriptions</span>
            </a>
            <a href="#" class="d-block bg-gray-100 mb-4">
                <span class="text-uppercase">ENT</span>
            </a>
            <a href="#" class="d-block bg-gray-100 mb-4">
                <span class="text-uppercase">Recrutement</span>
            </a>
            <a href="#" class="d-block bg-gray-100 mb-4">
                <span class="text-uppercase">CDI</span>
            </a>
            <div class="tweets">
                <span>tweets</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/evenements'); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/blogs'); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php get_template_part('partials/webradio'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>