<?php get_header(); ?>
<header>
	<div class="artwork">
		<div class="logo-and-corners">
			<img alt="" class="corner corner-left" src="<?php echo get_bloginfo('template_url') ?>/images/corner-left.png"/>
			<img alt="Logo Synthesis Festival" class="synthesis-logo" src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo.png"/>
			<img alt="" class="corner corner-right" src="<?php echo get_bloginfo('template_url') ?>/images/corner-right.png"/>
		</div>
		<img class="synthesis-artwork" alt="Artwork Synthesis Festival"
			 src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-artwork-start.png"/>
	</div>
	<nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<img alt="Logo Synthesis Festival" class="synthesis-header-logo" src="<?php echo get_bloginfo('template_url') ?>/images/synthesis-logo-header.png"/>
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
