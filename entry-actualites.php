<article id="post-<?php the_ID(); ?>" <?php post_class('entry-actualites'); ?>>
    <div class="entry-content container" itemprop="mainEntityOfPage">
        <header class="entry-actualites-header">
            <h1 class="entry-actualites-heading text-uppercase text-center pt-sans-narrow-bold text-green">
                <span class="hexagon"><?php the_title(); ?></span>
            </h1>
            <?php $thePostDate = get_the_date('d F Y'); ?>
            <time class="entry-actualites-date" datetime="<?php echo $thePostDate; ?>"><?php echo $thePostDate; ?></time>
        </header>
        <meta itemprop="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
        <div class="entry-actualites-content wp_editor">
            <?php the_field('introductory_text'); ?>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('full', array( 'itemprop' => 'image' ));
            } ?>
            <div class="entry-actualites-content-text">
                <?php the_content(); ?>
            </div> 
        </div>
    </div>
</article>