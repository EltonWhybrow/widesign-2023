<?php
/*
 * Template Name: Fees Template
 * Template Post Type: post, page, press-release, people
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
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-gray-100">


    <section class="w-full border-b-4 border-gray-400">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="hidden md:block pt-6 font-semibold">Tuition fees</h4>
                <h2 class="text-2xl">A breakdown of fee structure and <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">offers</span> available</h2>
                <p class="py-2">Please see below for fee structure. If you have any queries feel free to <a class="primary-link relative text-base" href="/contact#contact-form">contact me</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN fees content -->
    <section id="moreinfo" class="max-w-5xl mx-auto py-16">

        <div class="grid gap-10 grid-col-1 md:grid-cols-2 px-5">

            <div class="border rounded-md border-gray-400 p-10">

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">1:1 session</h4>
                    <p class="text-base">Entirely personalised one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£30.00/hr</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                        Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10">

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">Small group session (max. 4)</h4>
                    <p class="text-base">Peer and collaborative learning one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£20.00/hr</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                        Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10 relative">
                <span class="absolute -right-1 md:-right-5 -top-6 rotate-12 transform">
                    <img class="hidden md:block" src="/resources/img/pages/fees/saving.svg" alt="percent off" width="100px" height="auto" />
                    <img class="md:hidden" src="/resources/img/pages/fees/saving.png" alt="percent off" width="100px" height="auto" />
                </span>

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">1:1 session bundle (10 lessons)</h4>
                    <p class="text-base">Entirely personalised one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£255.00</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                            Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>
            <div class="border rounded-md border-gray-400 p-10 relative">
                <span class="absolute -right-1 md:-right-5 -top-6 rotate-12 transform">
                    <img class="hidden md:block" src="/resources/img/pages/fees/saving.svg" alt="percent off" width="100px" height="auto" />
                    <img class="md:hidden" src="/resources/img/pages/fees/saving.png" alt="percent off" width="100px" height="auto" />
                </span>

                <div class="mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths/English Tuition
                    </span>

                    <h4 class="pb-2 font-semibold">Small group session bundle (10 lessons)</h4>
                    <p class="text-base">Peer and collaborative learning one hour long sessions, in the area of Maths or English</p>
                    <p class="text-2xl text-teal-500 font-semibold">£170.00</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link md:text-sm text-md underline" href="/session-booking/#booking-form">
                        Booking request
                        </a>
                        <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
                            View slots
                        </a>
                    </p>
                </div>

            </div>


        </div>

    </section>
</div>

<!-- MODAL Test 1 -->
<div id="modal-timetable" class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-gray-100 w-screen md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
    <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>
    <h2 class="text-2xl">Tuition timetable</h2>
    <p>Current available days/times. To <a class="relative primary-link text-base" href="/session-booking/#booking-form">book a session</a> please contact me.
    </p>


    <div class="flex flex-wrap -mx-2 overflow-hidden">

        <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
            <h3 class="text-teal-500 font-semibold">Monday</h3>
            <p class="line-through">4.30pm - 5.30pm</p>
            <p class="line-through">5.45pm - 6.45pm</p>
        </div>

        <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
            <h3 class="text-teal-500 font-semibold">Tuesday</h3>
            <p class="line-through">4.30pm - 5.30pm</p>
            <p class="line-through">5.45pm - 6.45pm</p>
        </div>

        <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
            <h3 class="text-teal-500 font-semibold">Wednesday</h3>
            <p class="line-through">4.30pm - 5.30pm</p>
            <p class="line-through">5.45pm - 6.45pm</p>
        </div>

        <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
            <h3 class="text-teal-500 font-semibold">Thursday</h3>
            <p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
            <p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
            <p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
        </div>

        <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
            <h3 class="text-teal-500 font-semibold">Friday</h3>
            <p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
            <p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
            <p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
        </div>

    </div>

    <!-- <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button> -->
</div>


<?php get_footer(); ?>