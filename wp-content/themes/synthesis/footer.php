<?php get_sidebar(); ?>
<footer id="footer" role="contentinfo">
	<img alt="Logo Synthesis Festival" class="synthesis-footer-logo" src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-footer.png"/>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-navigation' ) ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
