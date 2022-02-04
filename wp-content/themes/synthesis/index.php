<?php get_header(); ?>
<main id="content" role="main">
	<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
	</nav>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('entry'); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part('nav', 'below'); ?>
</main>
<?php get_footer(); ?>
