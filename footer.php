    <?php global $HOMEID; ?>
    <footer id="footer" class="footer row" role="contentinfo">
        <div class="col-12">    
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="footer-location">
                        <address>
                            <span class="footer-location-heading pt-sans-narrow-bold">UBICACIÓN</span><br>
                            <span class="footer-location-address">1ra avenida 2-62 zona 1, Aldea Don Justo, Fraijanes (Carretera a San José Pinula km 18.5), Fraijanes 01062</span> 
                        </address>
                        <?php $mapIframe = get_field('address_map_iframe', $HOMEID); ?>
                        
                        <?php if($mapIframe): ?>
                            <p><?php echo $mapIframe; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 footer-sponsor-borders">
                    <div class="footer-sponsor">
                        <p class="pt-sans-narrow-bold footer-sponsor-heading">COLABORADORES</p>
                        <img class="img-responsive" src="<?php echo get_bloginfo('template_directory').'/images/footer-logo.png'; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="footer-contact">
                        <p class="pt-sans-narrow-bold footer-contact-heading">CONTÁCTENOS</p>
                    </div>
                    <div class="footer-email mb-4">
                        <a href="mailto:adg@jv.edu.gt" class="footer-email-address">adg@jv.edu.gt</a>
                    </div>
                    <div class="footer-phone">
                        <a href="tel:50266611800" class="footer-email-address"> +502 6661-1800</a>
                    </div>
                </div>
            </div>
            <div class="row footer-outro">
                <div class="col-12 text-center footer-outro-wrapper">
                    <p class="pt-sans-narrow-bold text-center m-0">© Lycée International Français Jules Verne de Guatemala</p>    
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