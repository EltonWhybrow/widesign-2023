<?php get_header(); ?>

<!-- HEADER -->
<section class="flex flex-wrap md:flex-nowrap">
    <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
        <div class="p-3 md:p-10 text-center">
            <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                The <span class="text-mellow-400">Hub</span> <span class="text-mellow-600"></span>
            </h2>
            <!-- <h3 class="text-teal-400 text-xl text-bold">Resources and useful stuff</h3> -->
        </div>
    </div>
</section>

<!-- wysiwyg main content -->
<main class="wysiwyg-content pt-4 md:pt-10 md:pb-10 px-4 md:px-10 ">

    <?php
    if (have_posts()) :

        if (is_home() && !is_front_page()) :
    ?>
            <header>
                <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
            </header>

            <div class="justify-center max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 md:gap-10">
            <?php

        endif;

        /* Start the Loop */
        while (have_posts()) :
            the_post();
            ?> <div class="bg-gray-50 hover:bg-gray-100 border mb-10 rounded-lg group"><?php
                                                                                        if (has_post_thumbnail()) : ?>
                        <div class="w-full">
                            <div class="pb-4/12 relative">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="absolute top-0 left-0 h-full lg:h-full w-full object-cover rounded-t-lg" src="<?php the_post_thumbnail_url('blog-image-sm'); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="py-3 px-4">
                        <h1 class="text-gray-700">
                            <a class="group-hover:text-teal-500" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <span class="text-xs text-gray-600 pb-3 pt-1 block"><?php the_date('F j, Y'); ?></span>
                        <div class="text-gray-700 mb-1">
                            <?php
                            // the_excerpt();
                            $excerpt = get_the_excerpt();

                            $excerpt = substr($excerpt, 0, 200);
                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            echo "$result..";
                            // the_content();
                            ?><a class="read-on" href="<?php the_permalink(); ?>"> [read on]</a>
                        </div>
                    </div>


                </div><?php

                    endwhile;
                else : ?>

            <p>Sorry, no new content for now! 😞</p>
        <?php endif;

        ?>
            </div>
</main>



<?php

get_footer(); ?>