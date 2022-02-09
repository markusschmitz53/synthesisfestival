<?php get_sidebar(); ?>
<footer id="footer" role="contentinfo">
	<div class="footer-container">
		<a class="synthesis-footer-logo" href="<?php echo get_bloginfo('wpurl') ?>">
			<img alt="Logo Synthesis Festival"
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-footer.png"/>
		</a>
        <?php wp_nav_menu(array('theme_location' => 'footer-navigation')); ?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
