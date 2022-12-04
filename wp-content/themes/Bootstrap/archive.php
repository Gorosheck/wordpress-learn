<?php get_header(); ?>
    <h1 class="my-4 page-title"><?php the_archive_title() ?></h1>
<?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>