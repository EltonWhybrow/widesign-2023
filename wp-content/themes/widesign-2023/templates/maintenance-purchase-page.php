<?php get_header();

/*
 * Template Name: Maintenance Purchase Template
 * Template Post Type: post, page, press-release, people
 */

?>

<!-- wysiwyg main content -->
<div class="bg-white">

    <section class="w-full bg-teal-700 md:flex flex-wrap justify-center pt-12 pb-20 space-y-5 lg:space-y-0 lg:space-x-6">
        <div class="px-4 md:px-0 flex-none sm:flex lg:flex-col w-full md:w-10/12 lg:w-4/12 space-y-5 md:space-y-0  md:space-x-6 lg:space-x-0">
            <div class="flex-1 lg:flex-none">
                <?php the_content(); ?>
            </div>

            <div class="flex-1 lg:py-4">
                <ul class="tick-list">
                    <li>Site health checkup</li>
                    <li>Security updates</li>
                    <li>Plugin updates</li>
                    <li>Funtional testing</li>
                    <li>Visual testing</li>
                    <li>Quarterly report</li>
                </ul>
            </div>
        </div>

        <div class="px-4 md:px-0 w-full md:w-10/12 lg:w-4/12 text-sm">

            <?php echo do_shortcode('[wpforms id="926" title="false"]'); ?>

        </div>
    </section>

</div>

<?php get_footer(); ?>