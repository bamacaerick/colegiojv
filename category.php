<?php get_header(); ?>
<?php

$headingColor = 'text-green';

if(is_category('evenements')) {
    $headingColor = 'text-fuscia';
} elseif(is_category('exposition')) {
    $headingColor = 'text-pink';
} elseif(is_category('webradio')) {
    $headingColor = 'text-green-light';
}

?>
<main id="content" role="main" class="row">
    <div class="col-12 col-lg-8">
        <header class="header">
            <h1 class="entry-title pt-sans-narrow-bold <?php echo $headingColor; ?>" itemprop="name"><?php single_term_title(); ?></h1>
            <div class="archive-meta" itemprop="description">
                <?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if(is_category('actualites')): ?>
                <?php get_template_part('partials/actualites-list'); ?>
            <?php elseif(is_category('evenements')): ?>
                <?php get_template_part('partials/evenements-list'); ?>
            <?php elseif(is_category('exposition')): ?>
                <?php get_template_part('partials/exposition-list'); ?>
            <?php elseif(is_category('webradio')): ?>
                <?php get_template_part('partials/webradio-list'); ?>
            <?php else: ?>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        <?php wp_pagenavi(); ?>
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
    </div>
</main>
<?php get_footer(); ?>