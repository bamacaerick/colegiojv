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
    </div>
</main>
<?php get_footer(); ?>