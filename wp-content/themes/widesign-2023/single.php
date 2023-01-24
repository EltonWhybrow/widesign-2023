<?php get_header(); ?>

<div class="bg-teal-500">

    <div class="lg:container lg:mx-auto py-2">

        <div class="flex md:pb-3 pt-2 text-white">

            <div class="w-full md:w-2/5 text-sm px-5">
                <h2 class=" font-bold text-white mb-3 pl-0 text-right"><?php the_title(); ?></h2>

                <p class="py-0 text-right">

                    <a href="/blog" class="inline-flex primary-btn text-sm uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </a>
                </p>
            </div>

            <div class="md:w-3/5 px-5 text-sm">

                <p class="py-4">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="mx-auto w-2/3" src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<section class="container mx-auto md:py-10 pb-3 max-w-4xl">

    <div class="md:pb-12 pt-4 text-sm px-5">

        <!-- <h2 class=" font-bold text-teal-500 my-3 pl-0">Latest posts</h2> -->
        <?php get_template_part('templates/partials/section', 'blogcontent'); ?>

    </div>
</section>













<?php get_footer(); ?>