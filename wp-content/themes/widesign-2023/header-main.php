<?php get_template_part('templates/partials/document-open'); ?>
<div id="modal-overlay" class="postion fixed hidden top-0 bottom-0 left-0 right-0 bg-gray-700 z-100 opacity-60"></div>
<header class="sticky top-0 z-75" style="width:100%;">

    <div class="flex justify-between py-2 ml-6 md:ml-10">

        <!-- MAIN LOGO -->
        <div class="w-36">
            <a href="/" class="cursor-pointer block main-logo">
                <svg class="fill-current stroke-current text-teal-500 w-28 h-20" viewBox="25 20 80 110">
                    <path fill-rule="evenodd" d="M104.474 35.49c-1.628 0-2.756 1.248-2.63 2.87.125 2.123-2.882 4.12-6.765 4.745C89.817 34.116 81.675 27 73.407 27c-7.14 0-10.523 4.245-10.523 8.49 0 11.235 17.789 14.232 28.938 13.233 3.006 6.242 4.635 13.733 4.635 20.974 0 20.724-11.024 35.58-26.808 35.58-9.27 0-13.53-6.741-15.66-10.237 8.018-9.863 12.779-22.847 12.779-30.837 0-11.485-5.512-13.608-9.02-13.608-9.395 0-13.78 13.733-13.78 23.346 0 7.74 1.253 14.607 3.508 20.225-4.886 5.243-11.15 9.613-18.165 9.613-4.259 0-7.641-1.748-10.147-4.245-3.257-3.37-5.01-8.988-5.01-16.354 0-6.617 1.628-14.232 4.885-21.224 15.158 0 33.448-11.61 33.448-19.975 0-4.619-3.508-7.865-8.268-7.865-11.15 0-21.547 9.863-28.312 22.222-4.635-1.123-9.52-4.744-9.52-11.36 0-.5.25-2.497.25-2.872 0-1.498-1.127-2.746-2.63-2.746C1 39.36 1 42.855 1 44.978c0 8.24 5.637 13.982 12.527 16.104-3.006 7.241-5.01 14.982-5.01 22.098 0 15.855 7.265 25.593 20.794 25.593 7.266 0 14.407-3.371 20.795-9.738 4.385 7.74 11.776 11.36 19.543 11.36 18.665 0 32.445-16.604 32.445-40.698 0-7.491-1.754-15.231-4.635-21.973 7.391-1.873 9.771-5.743 9.771-9.363 0-1.623-1.252-2.872-2.756-2.872Zm-34.97.729c0-1.827 1.642-3.262 4.801-3.262 5.054 0 11.12 4.306 16.048 11.874-13.268.522-20.85-4.176-20.85-8.612ZM58.102 56.784c2.562 0 3.46 3.475 3.46 8.19 0 5.834-3.588 16.879-9.737 25.566-1.409-4.468-2.178-10.3-2.178-15.885 0-7.446 3.46-17.87 8.455-17.87Zm-14.04-16.878c1.118 0 2.607.612 2.607 2.569 0 4.036-12.534 13.086-24.82 14.31 5.833-10.03 14.52-16.879 22.214-16.879Zm74.012 52.03c-4.878 0-8.858 3.766-8.858 9.036 0 6.275 6.676 10.416 13.993 10.416 9.757 0 15.406-5.772 15.406-13.553 0-6.4-4.237-10.04-10.527-13.679-5.136-3.012-6.29-4.518-6.29-6.902 0-3.263 2.31-5.773 6.418-5.773 3.338 0 5.135 2.76 5.52 4.016.257 1.004 1.541 1.631 2.311 1.631 1.67 0 2.953-1.255 2.953-2.886 0-2.133-2.953-7.53-10.656-7.53-7.96 0-12.196 5.397-12.196 10.542 0 6.275 5.264 9.663 9.372 11.796 5.777 3.012 7.318 6.526 7.318 9.538 0 5.647-4.879 8.283-9.5 8.283-4.622 0-8.345-3.012-8.345-6.024 0-1.757.642-3.64 3.081-3.64.899 0 1.284.252 2.054.377.77.126 2.568-.251 2.568-2.384 0-2.51-2.311-3.263-4.622-3.263Z" />
                </svg>

            </a>
        </div>

        <!-- MAIN NAVIGATION -->
        <div class="flex-1 pl-0 py-0 mx-1 hidden md:block">
            <?php get_template_part('templates/partials/navbar', 'main'); ?>
        </div>

        <!-- BURGER -->
        <div id="hamburger" class="hamburglar is-closed mr-6">

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
                <div class="animate-path cursor-pointer">
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