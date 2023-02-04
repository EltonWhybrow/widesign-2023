<?php
/*
 * Template Name: Site Map Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<!-- HEADER -->
<section class="flex flex-wrap md:flex-nowrap">
    <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
        <div class="p-3 md:p-10">
            <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                Site <span class="text-mellow-400">Map</span><span class="text-mellow-600"></span>
            </h2>
        </div>
    </div>
</section>

<section class="sitemap py-20 px-4 md:px-10 bg-teal-700 text-center">
    <h1 class="text-gray-200 text-4xl uppercase font-bold">
        Where am I?
    </h1>

    <h2 class="text-teal-400 text-xl text-bold">
        Quick reference to all pages contained within our site.
    </h2>

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
                            'post__not_in' => array(94, 222), // hide site map page and testimonials for now
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

            <div class="sitemp-pages w-1/2 px-2">

                <h3 class="">Posts</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'post', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'post__not_in' => array(94, 222), // hide site map page and testimonials for now
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



</section>

<?php get_footer(); ?>