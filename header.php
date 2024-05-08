<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="<?php if (is_single()) {
    echo wp_strip_all_tags(get_the_excerpt(), true);
} else {
    bloginfo('description');
} ?>" />
    <meta name="keywords"
        content="<?php echo implode(', ', wp_get_post_tags(get_the_ID(), array( 'fields' => 'names' ))); ?>" />
    <meta property="og:image" content="<?php if (is_single() && has_post_thumbnail()) {
    the_post_thumbnail_url('full');
} elseif (has_site_icon()) {
    echo get_site_icon_url();
} ?>" />
    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:title" content="<?php if (is_single()) {
    the_title();
} else {
    bloginfo('name');
} ?>" />
    <meta name="twitter:description" content="<?php if (is_single()) {
    echo wp_strip_all_tags(get_the_excerpt(), true);
} else {
    bloginfo('description');
} ?>" />
    <meta name="twitter:image" content="<?php if (is_single() && has_post_thumbnail()) {
    the_post_thumbnail_url('full');
} elseif (has_site_icon()) {
    echo get_site_icon_url();
} ?>" />
    <meta name="twitter:url" content="<?php if (is_single()) {
    esc_url(the_permalink());
} else {
    echo esc_url(home_url()) . '/';
} ?>" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta name="twitter:widgets:link-color" content="blue" />
    <meta name="twitter:widgets:border-color" content="#fff" />
    <link rel="canonical"
        href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>" />
    <script type="application/ld+json">
    {
        "@context": "https://www.schema.org/",
        "@type": "WebSite",
        "name": "<?php bloginfo('name'); ?>",
        "url": "<?php echo esc_url(home_url()); ?>/"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://www.schema.org/",
        "@type": "Organization",
        "name": "<?php bloginfo('name'); ?>",
        "url": "<?php echo esc_url(home_url()); ?>/",
        "logo": "<?php if (has_custom_logo()) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    echo esc_url($logo[0]);
} ?>",
        "image": "<?php if (has_site_icon()) {
    echo get_site_icon_url();
} ?>",
        "description": "<?php bloginfo('description'); ?>"
    }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php global $HOMEID;?>
    <div class="container main-container">
        <header id="header" role="banner" class="header">
                <div class="row d-none d-md-flex header-preheader bg-black-light align-items-center">
                    <div class="col-6 text-start">
                    </div>
                    <div class="col-6 text-end">
                        <div class="row justify-content-end">
                            <div class="header-preheader-social social col-auto">
                                <?php 
                                    $homeId = $HOMEID;
                                    $fb_link = get_field('facebook_page_link', $homeId);
                                    $tw_link = get_field('x_twitter_profile_link', $homeId);
                                    $pin_link = get_field('pinterest_profile_link', $homeId);
                                    $ig_link = get_field('instagram_profile_link', $homeId);
                                ?>
                                <?php if ($fb_link): ?>
                                    <a href="<?php echo $fb_link; ?>" class="social-icon social-icon-fb"><span class="sr-only">Facebook</span></a>
                                <?php endif; ?>
                                <?php if ($tw_link): ?>
                                    <a href="<?php echo $tw_link; ?>" class="social-icon social-icon-x"><span class="sr-only">X</span></a>
                                <?php endif; ?>
                                <?php if ($pin_link): ?>
                                    <a href="<?php echo $pin_link; ?>" class="social-icon social-icon-pin"><span class="sr-only">Pinterest</span></a>
                                <?php endif; ?>
                                <?php if ($ig_link): ?>
                                    <a href="<?php echo $ig_link; ?>" class="social-icon social-icon-ig"><span class="sr-only">Instagram</span></a>
                                <?php endif; ?>
                            </div>
                            <div class="header-search col-auto">
                                <?php get_search_form(); ?>
                            </div>
                            <div class="language-selector col-auto">
                                <a href="/fr" class="language-selector-anchor">FR</a>
                                <a href="/" class="active language-selector-anchor">ES</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row header-branding header-branding-bg align-items-center">
                    <div class="col-6 p-0">
                        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <?php
                                if (is_front_page() || is_home() || is_front_page() && is_home()) {
                                    echo '<h1>';
                                }
                                if (has_custom_logo()) {
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                                    $nologo = '';
                                } elseif (has_site_icon()) {
                                    $logo = get_site_icon_url();
                                    $nologo = '';
                                } else {
                                    $logo = '';
                                    $nologo = 'no-logo';
                                }
                                echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span class="screen-reader-text" itemprop="name">' . esc_html(get_bloginfo('name')) . '</span><span id="logo-container" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img src="';
                                if (has_custom_logo()) {
                                    echo esc_url($logo[0]);
                                } else {
                                    echo esc_url($logo);
                                }
                                echo '" alt="' . esc_attr(get_bloginfo('name')) . '" id="logo" class="' . esc_attr($nologo) . '" itemprop="url" /></span></a>';
                                if (is_front_page() || is_home() || is_front_page() && is_home()) {
                                    echo '</h1>';
                                }
                                ?>
                        </div>
                        <div id="site-description" class="sr-only" <?php if (!is_single()) {echo ' itemprop="description"';} ?>>
                            <?php bloginfo('description'); ?>
                        </div>
                    </div>
                    <div class="col-6 text-end p-0">
                        <div class="header-branding-secondary d-inline-block">
                            <span class="sr-only">Éttablissement conventionné  |</span> 
                            <span class="sr-only">aefe - Agence pour l'enseignement français à l'étranger</span>
                        </div>
                    </div>
                </div>
                <?php if( is_page_template('page-home.php')) {
                    get_template_part('partials/slider');
                }?>
                <div class="row">
                    <div class="col-12 p-0">
                        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <!-- <button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e(' Menu', 'generic'); ?></span></button> -->
                            <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' )); ?>
                            <div id="search"></div>
                        </nav>
                    </div>
                </div>
        </header>