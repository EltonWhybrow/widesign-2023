<?php get_header();

/*
 * Template Name: Web Purchase Template
 * Template Post Type: post, page, press-release, people
 */

?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-white">

    <section class="w-full bg-teal-700 md:flex flex-wrap justify-center pt-12 pb-20 space-y-5 lg:space-y-0 lg:space-x-6">
        <div class="px-4 md:px-0 flex-none sm:flex lg:flex-col w-full md:w-10/12 lg:w-4/12 space-y-5 md:space-y-0  md:space-x-6 lg:space-x-0">
            <div class="flex-1 lg:flex-none">
                <?php the_content(); ?>
            </div>

            <div class="flex-1 lg:py-4">
                <?php
                // Test if the query exists at the URL
                if (get_query_var('plan') === 'starter') {

                    // If so echo the value
                    // echo get_query_var('ppc');
                    echo get_field('plan_1');
                } elseif (get_query_var('plan') === 'advanced') {

                    // If so echo the value
                    // echo get_query_var('ppc');
                    echo get_field('plan_2');
                } elseif (get_query_var('plan') === 'ecommerce') {

                    // If so echo the value
                    // echo get_query_var('ppc');
                    echo get_field('plan_3');
                }
                ?>
            </div>
        </div>

        <div class="px-4 md:px-0 w-full md:w-10/12 lg:w-4/12 text-sm">

            <?php echo do_shortcode('[wpforms id="897" title="false"]'); ?>

        </div>
    </section>

</div>

<?php get_footer(); ?>