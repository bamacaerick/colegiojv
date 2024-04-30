<?php get_header(); ?>
<main id="content" role="main" class="singular-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('entry-actualites'); ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>