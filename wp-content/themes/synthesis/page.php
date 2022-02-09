<?php get_header(); ?>
<header>
	<button id="close-mobile-menu" href="#"></button>
	<nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a class="synthesis-header-logo" href="<?php echo get_bloginfo('wpurl') ?>">
			<img alt="Logo Synthesis Festival"
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header.png"/>
		</a>
		<button id="toggle-mobile-menu" href="#"></button>
        <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
		<div class="wp-block-button language-button">
            <?php
            $translations = pll_the_languages(array('raw' => 1, 'hide_current' => 1));
            foreach ($translations as $translation) {
                echo '<a href=' . $translation["url"] . ' class="wp-block-button__link">' . $translation["name"] . '</a>';
            }
            ?>
		</div>
	</nav>
	<nav id="mobile-menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a class="synthesis-header-logo" href="<?php echo get_bloginfo('wpurl') ?>">
			<img alt="Logo Synthesis Festival"
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header.png"/>
		</a>
        <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
        <?php wp_nav_menu(array('theme_location' => 'footer-navigation')); ?>
		<div class="wp-block-button language-button">
            <?php
            $translations = pll_the_languages(array('raw' => 1, 'hide_current' => 1));
            foreach ($translations as $translation) {
                echo '<a href=' . $translation["url"] . ' class="wp-block-button__link">' . $translation["name"] . '</a>';
            }
            ?>
		</div>
	</nav>
</header>
<main id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('itemprop' => 'image'));
                } ?>
                <?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</div>
		</article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
