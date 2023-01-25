<?php get_template_part('templates/partials/document-open'); ?>
<div id="modal-overlay" class="postion fixed hidden top-0 bottom-0 left-0 right-0 bg-gray-700 z-100 opacity-60"></div>
<header class="sticky top-0 z-75" style="width:100%;">

    <div class="flex justify-between py-2 ml-10">

        <!-- MAIN LOGO -->
        <div class="w-36">
            <a href="/" class="cursor-pointer block main-logo">
                <svg viewBox="0 10 100 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="logo_web" fill="none" transform="translate(-10.000000, -10.000000)">
                        <rect id="Rectangle" x="0" y="0" width="140" height="140"></rect>
                        <path class="logo-path" stroke="#0d888c" stroke-width="1" d="M81.984,36.912 C80.892,36.912 80.136,37.752 80.22,38.844 C80.304,40.272 78.288,41.616 75.684,42.036 C72.156,35.988 66.696,31.2 61.152,31.2 C56.364,31.2 54.096,34.056 54.096,36.912 C54.096,44.472 66.024,46.488 73.5,45.816 C75.516,50.016 76.608,55.056 76.608,59.928 C76.608,73.872 69.216,83.868 58.632,83.868 C52.416,83.868 49.56,79.332 48.132,76.98 C53.508,70.344 56.7,61.608 56.7,56.232 C56.7,48.504 53.004,47.076 50.652,47.076 C44.352,47.076 41.412,56.316 41.412,62.784 C41.412,67.992 42.252,72.612 43.764,76.392 C40.488,79.92 36.288,82.86 31.584,82.86 C28.728,82.86 26.46,81.684 24.78,80.004 C22.596,77.736 21.42,73.956 21.42,69 C21.42,64.548 22.512,59.424 24.696,54.72 C34.86,54.72 47.124,46.908 47.124,41.28 C47.124,38.172 44.772,35.988 41.58,35.988 C34.104,35.988 27.132,42.624 22.596,50.94 C19.488,50.184 16.212,47.748 16.212,43.296 C16.212,42.96 16.38,41.616 16.38,41.364 C16.38,40.356 15.624,39.516 14.616,39.516 C12.6,39.516 12.6,41.868 12.6,43.296 C12.6,48.84 16.38,52.704 21,54.132 C18.984,59.004 17.64,64.212 17.64,69 C17.64,79.668 22.512,86.22 31.584,86.22 C36.456,86.22 41.244,83.952 45.528,79.668 C48.468,84.876 53.424,87.312 58.632,87.312 C71.148,87.312 80.388,76.14 80.388,59.928 C80.388,54.888 79.212,49.68 77.28,45.144 C82.236,43.884 83.832,41.28 83.832,38.844 C83.832,37.752 82.992,36.912 81.984,36.912 Z M57.96,36.912 C57.96,35.736 59.052,34.812 61.152,34.812 C64.512,34.812 68.544,37.584 71.82,42.456 C63,42.792 57.96,39.768 57.96,36.912 L57.96,36.912 Z M50.652,50.688 C52.332,50.688 52.92,53.04 52.92,56.232 C52.92,60.18 50.568,67.656 46.536,73.536 C45.612,70.512 45.108,66.564 45.108,62.784 C45.108,57.744 47.376,50.688 50.652,50.688 L50.652,50.688 Z M41.58,39.516 C42.336,39.516 43.344,39.936 43.344,41.28 C43.344,44.052 34.86,50.268 26.544,51.108 C30.492,44.22 36.372,39.516 41.58,39.516 L41.58,39.516 Z M91.224,74.376 C88.032,74.376 85.428,76.896 85.428,80.424 C85.428,84.624 89.796,87.396 94.584,87.396 C100.968,87.396 104.664,83.532 104.664,78.324 C104.664,74.04 101.892,71.604 97.776,69.168 C94.416,67.152 93.66,66.144 93.66,64.548 C93.66,62.364 95.172,60.684 97.86,60.684 C100.044,60.684 101.22,62.532 101.472,63.372 C101.64,64.044 102.48,64.464 102.984,64.464 C104.076,64.464 104.916,63.624 104.916,62.532 C104.916,61.104 102.984,57.492 97.944,57.492 C92.736,57.492 89.964,61.104 89.964,64.548 C89.964,68.748 93.408,71.016 96.096,72.444 C99.876,74.46 100.884,76.812 100.884,78.828 C100.884,82.608 97.692,84.372 94.668,84.372 C91.644,84.372 89.208,82.356 89.208,80.34 C89.208,79.164 89.628,77.904 91.224,77.904 C91.812,77.904 92.064,78.072 92.568,78.156 C93.072,78.24 94.248,77.988 94.248,76.56 C94.248,74.88 92.736,74.376 91.224,74.376 L91.224,74.376 Z" id="WS"></path>
                    </g>
                </svg>
            </a>
        </div>

        <!-- MAIN NAVIGATION -->
        <div class="flex-1 pl-0 py-0 mx-1 hidden md:block">
            <?php get_template_part('templates/partials/navbar', 'main'); ?>
        </div>

        <!-- BURGER -->
        <div id="hamburger" class="hamburglar is-closed mr-10">

            <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-bun-top"></span>
                    <span class="burger-filling"></span>
                    <span class="burger-bun-bot"></span>
                </div>
            </div>

            <!-- svg ring containter -->
            <div class="burger-ring">
                <svg class="svg-ring">
                    <path class="path" fill="none" stroke="bg-teal-500" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                </svg>
            </div>
            <!-- the masked path that animates the fill to the ring -->

            <svg width="0" height="0">
                <mask id="mask">
                    <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                </mask>
            </svg>
            <div class="path-burger">
                <div class="animate-path">
                    <div class="path-rotation"></div>
                </div>
            </div>

        </div>

        <?php get_template_part('templates/partials/navburger-main'); ?>

        <!-- <div class="flex-none pt-3 pr-3"> -->
        <!-- <p>
                <a class='relative primary-btn text-lg pr-10' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-1 right-1 inline-block w-6 h-6 m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <?php echo do_shortcode("[mobile_number]"); ?></a>
            </p> -->

        <!-- <p>
                <a class='relative primary-btn text-md' href='/register-interest'>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-1 right-1 inline-block w-6 h-6 m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
        Register Interest
        </a>
        </p> -->

        <!-- <h5 class="text-gray-400 pt-3 leading-5">
                Call for a <span class="uppercase">HASSLE-FREE</span> quote <br />or <a class='primary-link text-sm' href='#request-callback'>request a callback
                </a>
            </h5> -->

        <!-- </div> -->
    </div>
</header>