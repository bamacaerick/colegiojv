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
            <?php get_sidebar('links'); ?>
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