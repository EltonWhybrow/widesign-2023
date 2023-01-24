<?php
/*
 * Template Name: Site Map Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<!-- Mobile Header -->
<?php if (get_field('page_mobile_image')) { ?>
    <div class="sm:block md:hidden relative">
        <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
        <h2 class="text-xl bg-teal-500 py-1 text-white px-5"><?php the_title(); ?></h2>
    </div>
<?php } ?>

<!-- Main Header -->
<?php if (has_post_thumbnail()) : ?>
    <div class="py-0 hidden md:block">
        <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
        <!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white"><?php the_title(); ?></h2> -->
    </div>
<?php endif; ?>

<div class="sitemap">
    <section class="w-full border-b-4 border-gray-400">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="hidden md:block pt-6 font-semibold">Where am I?</h4>
                <h2 class="text-2xl"><span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">Site</span> map</h2>
                <p class="py-2">Quick reference to all pages contained within our site.
                </p>
            </div>
        </div>
    </section>

    <div class="container max-w-4xl py-14 text-xl mx-auto">

        <div class="flex flex-wrap">


            <div class="sitemp-pages w-1/2 px-2">

                <h3 class="">Pages</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'post__not_in' => array(94), // hide site map page
                            // 'tax_query' => array(
                            //     array(
                            //         'taxonomy' => 'category',
                            //         'field' => 'slug',
                            //         'terms' => 'about-us',
                            //     )
                            // ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>


                        <li>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-base">
                                <?php the_title(); ?>
                            </a>
                        </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>
        </div>
    </div>

</div><!-- sitemap -->


<?php get_footer(); ?>