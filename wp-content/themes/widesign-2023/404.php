<?php get_header(); ?>

<!-- Mobile Header -->

<div class="sm:block md:hidden relative">
    <img class="h-full w-full object-cover" src="/resources/img/pages/404/404-mobile.jpg" alt="Sorry, page not found">
    <!-- <h2 class="text-xl bg-teal-500 py-1 text-white px-5">Sorry, page not found</h2> -->
</div>


<!-- Main Header -->

<div class="py-0 hidden md:block">
    <img class="h-full w-full object-cover" src=/resources/img/pages/404/404.jpg" alt="Sorry, page not found">
    <!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white">Sorry, page not found</h2> -->
</div>

<!-- wysiwyg main content -->
<div class="wysiwyg-content">

    <section class="w-full border-b-4 border-gray-400">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="hidden md:block pt-6 font-semibold">You need to go back to school!</h4>
                <h2 class="text-2xl">Sorry! <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">404</span> - page not found</h2>
                <p class="py-2"> This is somewhat embarrassing, isn’t it? Go back to <a class="primary-link relative text-base" href="/">homepage</a> or try again..
                </p>
            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>