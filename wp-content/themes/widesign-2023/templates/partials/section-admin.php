<section class="pt-4 pb-8 md:pb-10 px-4 md:px-10 bg-blood-700 text-center">

    <?php if (is_user_logged_in()) : ?>
        <h4 class="pb-4 pl-4 text-left text-sm max-w-5xl mx-auto">You're logged in! (<a class="primary-link underline text-sm" href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>)</h4>
    <?php endif; ?>

    <div class="flex flex-wrap justify-center space-y-5 md:space-y-0 md:space-x-10 max-w-5xl mx-auto">

        <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-blood-600 rounded text-gray-200">
            <header class="font-bold text-3xl bg-blood-600 py-4">Managing Clients</header>
            <div class="card-content h-full">
                <div class="h-36 bg-manage-clients bg-cover bg-top bg-no-repeat">

                </div>
                <div class="px-4 pb-3">
                    <p class="pt-4 font-semibold">Useful links</p>
                    <p class="text-sm">
                        Helpers and Analytics etc.
                    </p>
                </div>
            </div>
            <footer class="bg-blood-800 py-3 items-end rounded-b">
                <div class="flex my-3 justify-center space-x-3">
                    <a class="js-slidein relative inline-flex primary-btn-sm hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://search.google.com/search-console">Search Console
                    </a>
                    <a class="js-slidein relative inline-flex primary-btn-sm hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://analytics.google.com/analytics/web/">GA
                    </a>
                    <a class="js-slidein relative inline-flex primary-btn-sm hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://tagmanager.google.com/#/">GTM
                    </a>
                    <a class="js-slidein relative inline-flex primary-btn-sm hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://manage.gocardless.com/">GoCardless
                    </a>
                    <a class="js-slidein relative inline-flex primary-btn-sm hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://insights.hotjar.com/sites/3368599/overview">Hotjar
                    </a>
                </div>
            </footer>
        </div>

        <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-blood-600 rounded text-gray-200">
            <header class="font-bold text-3xl bg-blood-600 py-4">Reseller Site</header>
            <div class="card-content h-full">
                <div class="h-36 bg-reseller bg-cover bg-top bg-no-repeat">

                </div>
                <div class="px-4 pb-3">
                    <p class="pt-4 font-semibold">My reseller account</p>
                    <p class="text-sm">
                        Setting up new hosting and managing existing config.
                    </p>
                </div>

            </div>
            <footer class="bg-blood-800 py-3 items-end rounded-b">
                <div class="flex my-3 justify-center space-x-3">
                    <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://secure.resellerspanel.com/login/login.html">Reseller Login<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-blood-500 bg-blood-600 group" target="_blank" href="https://uk.cloudlogin.co/login">Client Login<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </footer>
        </div>

    </div>
</section>