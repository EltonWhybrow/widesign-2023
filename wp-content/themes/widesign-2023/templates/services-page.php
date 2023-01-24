<?php

/*
 * Template Name: Services Template
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
        <!-- <h2 class="text-sm text-center bg-teal-500 p-2 text-white"><?php the_title(); ?></h2> -->
    </div>
<?php endif; ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-gray-100">

    <section class="w-full bg-gray-100 border-b-4 border-gray-400">
        <div class="flex max-w-5xl mx-auto pt-5 md:pt-10 pb-12 space-x-5">

            <div class="px-5 text-base">
                <h4 class="hidden md:block pt-6 font-semibold">Services</h4>
                <h2 class="text-2xl">Treat each child as an <span class="px-1 border-b-2 border-teal-500 transform inline-block -skew-y-2">individual</span> and watch them thrive</h2>
                <p class="py-2">Thank you for heading over to my website. Here you will find all you need to know about Redhill Tutoring Services. Contact me if you would like to <a class="primary-link relative text-base" href="/contact#contact-form">arrange a visit</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- What we offer section -->
    <section class="w-full border-b-4 border-gray-400 bg-gray-200">
        <div class="md:max-w-3xl mx-auto pt-8 pb-4 px-5">

            <div class="text-left">
                <h3 class="text-gray-600 text-2xl uppercase tracking-wide">What we offer at <span class="text-teal-500">Redhill Tutoring</span></h3>
                <p>Redhill Tutoring can help your child in any of the following areas of study:</p>
            </div>

            <div class="flex flex-wrap md:flex-nowrap md:space-x-4 py-10">

                <ul class="w-full md:w-1/2 px-0 md:px-10 text-gray-700">
                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        Phonics (early reading and writing skills)
                    </li>
                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        English tuition (Key Stage 1 & 2)
                    </li>
                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        Maths tuition (Key Stage 1 & 2)
                    </li>

                </ul>


                <ul class="w-full md:w-1/2 px-0 md:px-10 text-gray-700">
                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        SATs practice revision
                    </li>

                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        1:1 sessions
                    </li>
                    <li class="relative py-3 ml-10 md:ml-2">
                        <img class="absolute -left-10 md:-left-7 inline-block top-2 md:top-3" src="/resources/img/pages/icons/icon-apple.svg" alt="apple icon" width="24px" height="auto" />
                        Small <a class="modal-trigger relative primary-link text-base underline" data-id="modal-group-sessions">
                            group sessions
                        </a>
                    </li>



                </ul>


            </div>
        </div>
    </section>

    <!-- MAIN services content -->
    <section id="moreinfo" class="max-w-5xl mx-auto py-16">

        <!-- <div class="mx-8 flex flex-wrap md:flex-nowrap mb-20">

            <div class="brand-swoosh object-cover md:hidden">
                <picture>
                    <source srcset="https://picsum.photos/640/480" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="https://picsum.photos/640/480" alt="Qualified Teacher">
                </picture>
            </div>

            <div class="w-full md:w-3/5 flex justify-center items-center">

                <div class="md:pr-4 mt-2 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Math &amp; English
                    </span>

                    <h4 class="pb-2 font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                    <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis animi repellendus quo eos rerum nulla corporis ad obcaecati optio dolorem est, enim odio velit? Nesciunt veniam nobis debitis illo?</p>
                    <p class="py-0">
                        <a class="relative primary-link text-sm underline" href="/contact/#contact-form">
                            Get in touch
                        </a>
                    </p>
                </div>

            </div>

            <div class="brand-swoosh object-cover hidden md:block">
                <picture>
                    <source srcset="https://picsum.photos/640/480" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="https://picsum.photos/640/480" alt="Qualified Teacher">
                </picture>
            </div>
        </div> -->

        <div class="mx-8 flex flex-wrap md:flex-nowrap mb-20 md:space-x-5">

            <div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
                <picture>
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-english.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-english.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/redhilltutoring-services-english.jpg" alt="Tutor Math at Redhill Tutoring">
                </picture>
            </div>

            <div class="w-full md:w-3/5 flex justify-center items-center">

                <div class="md:pr-4 mt-5 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        English
                    </span>

                    <h4 class="pb-2 font-semibold">Key Stage 1 & 2</h4>
                    <p class="text-base">English tutition has become increasingly popular since the introduction of the English, punctution and spelling test (SPAG) introduced in May 2013. By offering a personalised approach to learning, I aspire able to broaden children's knowledge, understanding and confidence in English. I offer 1:1 sessions as well as small group sessions.</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link text-md md:text-sm underline" href="/contact/#contact-form">
                            Get in touch
                        </a>
                        <a class="relative primary-link text-md md:text-sm underline" href="/session-booking/#booking-form">
                            Book Session
                        </a>
                    </p>
                </div>

            </div>

            <div class="brand-swoosh object-cover hidden md:block">
                <picture>
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-english.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-english.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/redhilltutoring-services-english.jpg" alt="Tutor Math at Redhill Tutoring">
                </picture>
            </div>
        </div>

        <div class="mx-8 flex flex-wrap md:flex-nowrap mb-20 md:space-x-5">

            <div class="brand-swoosh object-cover w-full md:w-96 md:hidden">
                <picture>
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-math.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-math.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/redhilltutoring-services-math.jpg" alt="Tutor English at Redhill Tutoring">
                </picture>
            </div>

            <div class="w-full md:w-3/5 flex justify-center items-center">

                <div class="md:pr-4 mt-5 md:mt-0">
                    <span class="text-2xl pr-2 tracking-wide">
                        Maths
                    </span>

                    <h4 class="pb-2 font-semibold">Key Stage 1 & 2</h4>
                    <p class="text-base">Using a baseline assessment to highlight areas of strengths and weaknesses, I offer a customised maths curriculum to help close gaps in their learning and help children be more confident in the classroom. Again, offering 1:1 sessions as well as small group sessions.</p>
                    <p class="py-0 flex justify-between">
                        <a class="relative primary-link text-md md:text-sm underline" href="/contact/#contact-form">
                            Get in touch
                        </a>
                        <a class="relative primary-link text-md md:text-sm underline" href="/session-booking/#booking-form">
                            Book Session
                        </a>
                    </p>
                </div>

            </div>

            <div class="brand-swoosh object-cover hidden md:block">
                <picture>
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-math.webp" type="image/webp">
                    <source srcset="/resources/img/pages/services/redhilltutoring-services-math.jpg" type="image/jpeg">
                    <img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/services/redhilltutoring-services-math.jpg" alt="Tutor English at Redhill Tutoring">
                </picture>
            </div>
        </div>
    </section>

</div>


<!-- MODAL Test 1 -->
<div id="modal-group-sessions" class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-gray-100 w-screen md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
    <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>
    <h2 class="text-2xl">Group Sessions</h2>
    <h4 class="pb-2 font-semibold">Benefits of group working</h4>
    <p>
        Working in small groups allows children to attempt tasks they may not feel confident tackling independently. Sharing ideas and listening to each other is another effective way of learning.</p>
    <p>
        Children are far more likely to feel comfortable and confident within a small group, peer on peer learning, who may not otherwise participate.
    </p>
    <!-- <p>Current available days/times. To <a class="relative primary-link text-base" href="/session-booking/#booking-form">book a session</a> please contact me.
    </p> -->


    <!-- <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button> -->
</div>

<?php get_footer(); ?>