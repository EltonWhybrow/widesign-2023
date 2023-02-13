<?php

/*
 * Template Name: Clients Area Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>

<!-- wysiwyg main content -->
<div class="bg-gray-100">


    <!-- HEADER -->
    <section class="flex flex-wrap md:flex-nowrap">
        <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
            <div class="p-3 md:p-10">
                <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                    Client <span class="text-mellow-400">area</span> <span class="text-mellow-600"></span>
                </h2>
            </div>
        </div>
    </section>

    <!-- ADMIN AREA -->
    <?php
    if (is_user_logged_in()) {
        echo get_template_part('templates/partials/section', 'admin');
    } else {
        echo '';
    };
    ?>


    <!-- CLIENT AREA -->
    <section class="pt-4 md:pt-5 pb-0 md:pb-10 px-4 md:px-10 bg-shadow-700 text-center">

        <?php if (!is_user_logged_in()) : ?>
            <h4 class="pb-4 pl-4 text-left  text-sm max-w-5xl mx-auto">Welcome clients! Admin? (<a href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>)</h4>
        <?php endif; ?>

        <div class="flex flex-wrap justify-center space-y-5 md:space-y-0 md:space-x-10 max-w-5xl mx-auto">



            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-shadow-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-shadow-600 py-4">Your Website Hosting</header>
                <div class="card-content h-full">
                    <div class="h-36 bg-hosting bg-cover bg-top bg-no-repeat">

                    </div>
                    <div class="px-4 pb-3">
                        <p class="pt-4 font-semibold">Login to your existing web hosting account</p>
                        <p class="text-sm">
                            If you have received an outstanding payment reminder, this is where you can make your payment. Also, perform other tasks like adding a sub-domain name, add/modify email addresses.
                        </p>
                    </div>
                </div>
                <footer class="bg-shadow-800 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative md:inline-flex pr-8 primary-btn hover:bg-shadow-500 bg-shadow-600 group mx-5 md:mx-0 w-full md:w-auto" target="_blank" href="https://uk.cloudlogin.co/login">Login<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>

            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-shadow-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-shadow-600 py-4">Your Emails</header>
                <div class="card-content h-full">
                    <div class="h-36 bg-email-access bg-cover bg-top bg-no-repeat">

                    </div>
                    <div class="px-4 pb-3">
                        <p class="pt-4 font-semibold">Access your webmail inbox</p>
                        <p class="text-sm">
                            Access your email online anywhere, anytime. If you need to check junk or lost access on your devices, you can do it here. If you happen to have lost your login details you will need to get in <a href="/contact-us" class="primary-link underline text-sm">touch with me</a>.
                        </p>
                    </div>
                </div>
                <footer class="bg-shadow-800 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative md:inline-flex pr-8 primary-btn hover:bg-shadow-500 bg-shadow-600 group mx-5 md:mx-0 w-full md:w-auto" target="_blank" href="https://webmail.supremecluster.com/">Access webmail<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>


        </div>

    </section>

    <section class="pt-4 pb-8 md:pb-10 px-4 md:px-10 bg-shadow-700 text-center">
        <div class="flex flex-wrap justify-center space-y-5 md:space-y-0 md:space-x-10 max-w-5xl mx-auto">

            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-shadow-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-shadow-600 py-4">Hosting Plans</header>
                <div class="card-content h-full">
                    <div class="h-36 bg-hosting-new bg-cover bg-top bg-no-repeat">

                    </div>
                    <div class="px-4 pb-3">
                        <p class="pt-4 font-semibold">Looking for new hosting plan</p>
                        <p class="text-sm">
                            Our UK servers and support are second to none. We offer a 99.9% server uptime guarantee and a '30-day Free Trial'. We also offer monthly backups as standard to protect against any failures that may occur.
                        </p>
                    </div>
                </div>
                <footer class="bg-shadow-800 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative md:inline-flex pr-8 primary-btn hover:bg-shadow-500 bg-shadow-600 group mx-5 md:mx-0 w-full md:w-auto" target="_blank" href="https://widesign.duoservers.com/">View plans<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>

            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-shadow-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-shadow-600 py-4">Search Domains</header>
                <div class="card-content h-full">
                    <div class="h-36 bg-domain-names bg-cover bg-top bg-no-repeat">

                    </div>
                    <div class="px-4 pb-3">
                        <p class="pt-4 font-semibold">Search for available domain names</p>
                        <p class="text-sm">
                            At WideSign, we don't simply provide domains - we provide outstanding domain management solutions. For the first year, we supply you with a FREE domain name together with any one of our cloud hosting packages.
                        </p>
                    </div>

                </div>
                <footer class="bg-shadow-800 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative md:inline-flex pr-8 primary-btn hover:bg-shadow-500 bg-shadow-600 group mx-5 md:mx-0 w-full md:w-auto" target="_blank" href="https://widesign.duoservers.com/get-a-domain/">Search names<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>



        </div>
    </section>

    <!-- TECH STACK -->
    <?php get_template_part('templates/partials/section', 'tech-stack');
    ?>

</div>

<!-- FEATURES MODAL -->
<?php get_template_part('templates/partials/section', 'features-modal');
?>


<?php get_footer(); ?>