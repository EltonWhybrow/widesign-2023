<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <!-- Mobile Header -->
        <?php if (get_field('page_mobile_image')) { ?>
            <div class="sm:block md:hidden relative">
                <img class="h-full w-full object-cover" src="<?php the_field('page_mobile_image'); ?>" alt="<?php the_title(); ?>">
                <!-- <h2 class="text-xl bg-teal-500 py-1 text-white px-5"><?php the_title(); ?></h2> -->
            </div>
        <?php } ?>

        <!-- Main Header -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="py-0 hidden md:block">
                <img class="h-full w-full object-cover" src="<?php the_post_thumbnail_url('page-hero-banner'); ?>" alt="<?php the_title(); ?>">
            </div>
        <?php endif; ?>


        <div class="bg-gray-100">
            <div class="flex justify-items-center py-3 space-x-3  max-w-5xl mx-auto px-5">
                <div class="flex-none text-right">
                    <a href="/projects" class="inline-flex primary-btn uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </a>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl uppercase pt-1"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap lg:max-w-5xl md:mx-auto lg:px-5">

            <?php if (get_field('img-1')) { ?>
                <img class=" w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-1'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-2')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-2'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-3')) { ?>
                <img class="w-full md:w-2/3 lg:w-1/2 mx-auto object-cover" src="<?php the_field('img-3'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <div class="w-full md:w-1/3 lg:w-1/2 mx-auto bg-gray-100 p-10">
                <h3 class="text-3xl uppercase text-gray-500"><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <a class="relative inline-flex primary-btn pr-6 mt-4" href="/contact#contact-form">
                    Enquire
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <?php if (get_field('img-4')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-4'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-5')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-5'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-6')) { ?>
                <img class="w-full mx-auto object-cover" src="<?php the_field('img-6'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

        </div>

        <?php if (get_field('video-1')) { ?>
            <div class="justify-items-center lg:py-10 bg-gray-100">
                <div class="w-full text-center">
                    <div class="w-full mx-auto">

                        <div class="relative flex items-center justify-center h-80 md:h-96 overflow-hidden object-cover object-bottom">
                            <video autoplay controls muted class="absolute top-0 w-auto z-10">
                                <source src="<?php the_field('video-1'); ?>" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (get_field('video-portrait')) { ?>
            <div class="justify-items-center lg:py-10 bg-gray-100">
                <div class="w-full text-center">
                    <div class="w-full mx-auto">

                        <div class="relative flex items-center justify-center h-100 overflow-hidden object-cover object-bottom">
                            <video autoplay controls muted class="absolute top-0 w-auto z-10">
                                <source src="<?php the_field('video-portrait'); ?>" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>



        <div class="flex flex-wrap lg:max-w-5xl md:mx-auto lg:px-5">

            <?php if (get_field('img-7')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-7'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-8')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-8'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-9')) { ?>
                <img class="w-full mx-auto object-cover" src="<?php the_field('img-9'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-10')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-10'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

            <?php if (get_field('img-11')) { ?>
                <img class="w-full md:w-1/2 mx-auto object-cover" src="<?php the_field('img-11'); ?>" alt="<?php the_title(); ?>">
            <?php } ?>

        </div>

        <div class="bg-gray-100">
            <div class="flex justify-items-center py-3 space-x-3 max-w-5xl mx-auto px-5">
                <div class="flex-none text-right">
                    <a href="/projects" class="inline-flex primary-btn uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </a>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl uppercase pt-1"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>


        <!-- wysiwyg content -->
        <!-- <section class="wysiwyg-content">
      
        </section> -->



<?php endwhile;
else : endif; ?>