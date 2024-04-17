<?php //get_sidebar(); ?>
<footer id="footer" role="contentinfo" class="container">
    <div id="copyright">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?>
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>