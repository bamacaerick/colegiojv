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
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Stilu-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Stilu-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
                            <div class="header-search col-auto">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row header-branding header-branding-bg align-items-center">
                    <div class="col-10 col-sm-6 col-md-4 col-lg-3 p-0">
                        <div id="site-title" class="header-branding-logo" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
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
                    <div class="col-12 col-sm-6 col-md-4 col-lg-6 d-none d-md-block">
                        <p class="stilu-font-bold text-center header-branding-description">
                            <?php echo get_bloginfo('name'); ?><br>
                            <?php echo get_bloginfo('description'); ?>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-end p-0">
                        <div class="header-branding-secondary d-inline-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-secondary.png" alt="">
                            <span class="sr-only">Éttablissement conventionné  |</span> 
                            <span class="sr-only">aefe - Agence pour l'enseignement français à l'étranger</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <!-- <button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e(' Menu', 'generic'); ?></span></button> -->
                            <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' )); ?>
                            <div id="search"></div>
                        </nav>
                    </div>
                </div>
                <?php if( is_page_template('page-home.php')) {
                    get_template_part('partials/slider');
                }?>
        </header>