<?php get_header(); ?>


<!-- HEADER -->
<!-- <section class="flex flex-wrap md:flex-nowrap">
    <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
        <div class="p-3 md:p-10 text-center">
            <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                The <span class="text-mellow-400">Hub</span> <span class="text-mellow-600"></span>
            </h2>
            <h3 class="text-teal-400 text-xl text-bold">Resources and useful stuff</h3>
        </div>
    </div>
</section> -->

<!-- wysiwyg main content -->
<div class="wysiwyg-content">




    <div class="w-full bg-gray-900">
        <div class="flex justify-between py-5 max-w-3xl lg:max-w-4xl mx-auto px-5">
            <h1 class=""><?php the_title(); ?></h1>
            <a href="/hub" class="flex ease-out hover:-translate-x-1 transition-all transform my-2 items-center">
                <span>Back</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-teal-400 w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>

    <div class="w-full mb-4">
        <div class="pb-3/12 lg:pb-2/12 relative mb-8">
            <?php if (has_post_thumbnail()) : ?>
                <img class="absolute h-full w-full object-cover object-top" src="<?php the_post_thumbnail_url('blog-image-large'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    </div>

    <div class="w-full max-w-3xl lg:max-w-4xl mx-auto px-5">
        <?php the_content(); ?>
        <!-- <p>
            <?php //the_date('F j, Y'); 
            ?>
        </p> -->
        <hr class="mt-8" />
        <div class="flex justify-between pb-12">
            <p class="primary-link hover:underline">

                <?php previous_post_link('<svg xmlns="http://www.w3.org/2000/svg" class="h-4 inline-flex mb-1 text-teal-500 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg> %link', '%title'); ?>
            </p>
            <p class="primary-link hover:underline">

                <?php next_post_link('%link <svg xmlns="http://www.w3.org/2000/svg" class="h-4 inline-flex mb-1 text-teal-500 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>', '%title'); ?>

            </p>
        </div>
    </div>



</div>

<?php get_footer('alt'); ?>