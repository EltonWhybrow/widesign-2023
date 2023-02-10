<?php get_header(); ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    else : ?>
        <p>Sorry, no new content for now! 😞</p>
    <?php endif; ?>

</div>

<!-- <?php // get_template_part('templates/partials/section', 'partners');  
        ?> -->

<?php get_footer(); ?>