    <?php global $HOMEID; ?>
    <footer id="footer" class="footer row" role="contentinfo">
        <div class="col-12">    
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="footer-location">
                        <address>
                            <span class="footer-location-heading pt-sans-narrow-bold">Lycée français d’Auckland</span><br>
                            <span class="footer-location-address">35 Campbell Road, Auckland SW7 2DG</span> 
                            <span>+44(0)20 7584 6322</span> 
                        </address>
                        <?php $mapIframe = get_field('address_map_iframe', $HOMEID); ?>
                        
                        <?php if($mapIframe): ?>
                            <p><?php echo $mapIframe; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 footer-sponsor-borders">
                    <div class="footer-sponsor">
                        <p class="pt-sans-narrow-bold footer-sponsor-heading">Les partenaires</p>
                        <img class="img-responsive" src="<?php echo get_bloginfo('template_directory').'/images/footer-logo.png'; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="footer-contact">
                        <p class="pt-sans-narrow-bold footer-contact-heading">Contactez-nous</p>
                    </div>
                    <div class="footer-social">
                        <p class="pt-sans-narrow-bold footer-contact-heading">Suivez-nous</p>
                        <?php 
                            $homeId = $HOMEID;
                            $fb_link = get_field('facebook_page_link', $homeId);
                            $tw_link = get_field('x_twitter_profile_link', $homeId);
                            $pin_link = get_field('pinterest_profile_link', $homeId);
                            $ig_link = get_field('instagram_profile_link', $homeId);
                        ?>
                        <?php if ($fb_link): ?>
                            <a href="<?php echo $fb_link; ?>" class="social-icon-footer social-icon-footer-fb"><span class="sr-only">Facebook</span></a>
                        <?php endif; ?>
                        <?php if ($tw_link): ?>
                            <a href="<?php echo $tw_link; ?>" class="social-icon-footer social-icon-footer-x"><span class="sr-only">X</span></a>
                        <?php endif; ?>
                        <?php if ($pin_link): ?>
                            <a href="<?php echo $pin_link; ?>" class="social-icon-footer social-icon-footer-pin"><span class="sr-only">Pinterest</span></a>
                        <?php endif; ?>
                        <?php if ($ig_link): ?>
                            <a href="<?php echo $ig_link; ?>" class="social-icon-footer social-icon-footer-ig"><span class="sr-only">Instagram</span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row footer-outro">
                <div class="col-12 text-center footer-outro-wrapper">
                    <?php 
                        $sitemap_link = get_field('sitemap_link', $homeId);
                        $faqs_link = get_field('faqs_link', $homeId);
                        $terms_link = get_field('terms_link', $homeId);
                    ?>
                    <?php if ($sitemap_link): ?>
                        <a href="<?php echo $sitemap_link; ?>" class="footer-outro-links pt-sans-narrow-bold">PLAN DU SITE</a>
                        <span>&#183;</span> 
                    <?php endif; ?>
                    <?php if($faqs_link): ?>
                        <a href="<?php echo $faqs_link; ?>" class="footer-outro-links pt-sans-narrow-bold">FAQ</a>
                        <span>&#183;</span>
                    <?php endif; ?> 

                    <?php if($terms_link): ?>
                        <a href="<?php echo $terms_link; ?>" class="footer-outro-links pt-sans-narrow-bold">MENTION LÉGALES</a>
                    <?php endif; ?>
                        
                </div>
            </div>
        </div>
        <!-- <div id="copyright">
            &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?>
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div> -->
    </footer>
</div> 
<!-- Closing container -->
<?php wp_footer(); ?>
</body>

</html>