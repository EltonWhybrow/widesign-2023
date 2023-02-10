<?php
/*
 * Template Name: Our Work Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>
<!-- wysiwyg main content -->
<div class="bg-gray-100">

    <!-- HEADER -->
    <section class="flex flex-wrap md:flex-nowrap">
        <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
            <div class="p-3 md:p-10 text-center">
                <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                    Work<span class="text-mellow-400">/</span><span class="text-mellow-600">Projects</span>
                </h2>
            </div>
        </div>
    </section>

    <!-- WORK LIST -->
    <?php get_template_part('templates/partials/section', 'work-list');
    ?>

    <!-- CALLBACK -->
    <?php get_template_part('templates/partials/section', 'call-back');
    ?>

</div>

<!--  
// modal link
// <a class="modal-trigger relative primary-link md:text-sm text-md underline" data-id="modal-timetable" href="/about/#time-table">
//                             View slots
//                         </a>
//  MODAL Test 1 
// <div id="modal-timetable" class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-gray-100 w-screen md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
//     <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
//         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
//             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
//         </svg>
//     </button>
//     <h2 class="text-2xl">Tuition timetable</h2>
//     <p>Current available days/times. To <a class="relative primary-link text-base" href="/session-booking/#booking-form">book a session</a> please contact me.
//     </p>


//     <div class="flex flex-wrap -mx-2 overflow-hidden">

//         <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
//             <h3 class="text-teal-500 font-semibold">Monday</h3>
//             <p class="line-through">4.30pm - 5.30pm</p>
//             <p class="line-through">5.45pm - 6.45pm</p>
//         </div>

//         <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
//             <h3 class="text-teal-500 font-semibold">Tuesday</h3>
//             <p class="line-through">4.30pm - 5.30pm</p>
//             <p class="line-through">5.45pm - 6.45pm</p>
//         </div>

//         <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
//             <h3 class="text-teal-500 font-semibold">Wednesday</h3>
//             <p class="line-through">4.30pm - 5.30pm</p>
//             <p class="line-through">5.45pm - 6.45pm</p>
//         </div>

//         <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
//             <h3 class="text-teal-500 font-semibold">Thursday</h3>
//             <p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
//             <p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
//             <p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
//         </div>

//         <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-2/5">
//             <h3 class="text-teal-500 font-semibold">Friday</h3>
//             <p>4.30pm - 5.30pm <span class="text-teal-500">(Maths)</span></p>
//             <p>5.45pm - 6.45pm <span class="text-teal-500">(English)</span></p>
//             <p>7.00pm - 8.00pm <span class="text-teal-500">(1:1 Sessions)</span></p>
//         </div>

//     </div>

//      <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button> </div> -->


<?php get_footer(); ?>