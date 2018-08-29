<?php get_header(); ?>

<?php if ( have_rows('page_content') ): ?>
    <?php get_template_part('acf/_layouts'); // These are page-specific modules ?>
<?php endif; ?>

<?php get_footer();
