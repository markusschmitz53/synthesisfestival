<?php get_header(); ?>
<header>
	<nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<a class="synthesis-header-logo" href="<?php echo get_bloginfo('wpurl') ?>">
			<img alt="Logo Synthesis Festival" class="synthesis-header-logo"
				 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header.png"/>
		</a>
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
	<div class="language-buttons-small-screen">
        <?php
        $translations = pll_the_languages(array('raw' => 1, 'hide_current' => 1));
        foreach ($translations as $translation) {
            echo '<a href=' . $translation["url"] . '>' . $translation["name"] . '</a>';
        }
        ?>
	</div>
</header>
<main id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title has-text-align-center" itemprop="name"><?php esc_html_e( 'Oops', 'blankslate' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
	<p class="has-text-align-center"><?php esc_html_e( 'Diese Seite gibt es nicht. ', 'blankslate' ); ?> <a href="<?php echo get_bloginfo('wpurl') ?>">Zur Startseite</a></p>
</div>
</article>
</main>
<?php get_footer(); ?>
