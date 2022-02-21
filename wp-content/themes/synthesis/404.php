<?php get_header(); ?>
<header>
	<button id="close-mobile-menu" href="#"></button>
	<nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a class="synthesis-header-logo" href="<?php echo get_bloginfo('wpurl') ?>">
			<img alt="Logo Synthesis Festival"
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header-400.png"/>
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
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header-400.png"/>
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
<main id="content" role="main">
	<article id="post-0" class="post not-found">
		<header class="header">
			<h1 class="entry-title has-text-align-center"
				itemprop="name"><?php esc_html_e('Oops', 'blankslate'); ?></h1>
		</header>
		<div class="entry-content" itemprop="mainContentOfPage">
			<p class="has-text-align-center">
                <?php if (pll_current_language() === 'en') {
                    echo esc_html_e('This page doesn\'t exist. ', 'blankslate');
                    echo '&nbsp;<a href="' . get_bloginfo('wpurl') . '">Back to home</a></p>';
                }
                else {
                    echo esc_html_e('Diese Seite gibt es nicht. ', 'blankslate');
                    echo '&nbsp;<a href="' . get_bloginfo('wpurl') . '">Zur Startseite</a></p>';
                } ?>
		</div>
	</article>
</main>
<?php get_footer(); ?>
