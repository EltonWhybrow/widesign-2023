<?php

/*
 * Template Name: Web Packages Template
 * Template Post Type: post, page, press-release, people
 */

get_header(); ?>

<!-- wysiwyg main content -->
<div class="wysiwyg-content bg-gray-100">


    <!-- HEADER -->
    <section class="flex flex-wrap md:flex-nowrap">
        <div class="relative py-4 md:py-0 w-full flex justify-center items-center bg-gray-900">
            <div class="p-3 md:p-10">
                <h2 class="pb-1 text-mellow-200 uppercase font-semibold text-4xl md:text-5xl">
                    Web<span class="text-mellow-400">site</span> <span class="text-mellow-600">Packages</span>
                </h2>
            </div>
        </div>
    </section>

    <!-- PACKAGES -->
    <section class="pt-10 md:pt-20 pb-10 px-4 md:px-10 bg-plum-500 text-center">
        <div class="flex flex-wrap justify-center space-y-5 md:space-y-0 md:space-x-10 max-w-5xl mx-auto">
            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-plum-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-plum-600 py-4">Starter</header>
                <div class="card-content p-4">
                    <p class="py-2 text-sm">1st year hosting/domain name FREE</p>
                    <p class="text-3xl font-semibold py-4">
                        £599
                    </p>
                    <p class="">
                        Up to 4 pages (<a href="#" data-id="modal-features" class="modal-trigger relative text-plum-200 primary-link underline">feature list</a>)
                    </p>
                </div>
                <footer class="bg-plum-400 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-plum-600 bg-plum-700 group" href="/services/web-package?plan=starter">Select<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>

            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-plum-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-plum-600 py-4">Advanced</header>
                <div class="card-content p-4">
                    <p class="py-2 text-sm">1st year hosting/domain name FREE</p>
                    <p class="text-3xl font-semibold py-4">
                        £1,495
                    </p>
                    <p class="">
                        Starter + Multiple pages / Blog / Admin (<a href="#" data-id="modal-features" class="modal-trigger relative text-plum-200 primary-link underline">feature list</a>)
                    </p>
                </div>
                <footer class="bg-plum-400 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-plum-600 bg-plum-700 group" href="/services/web-package?plan=advanced">Select<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>

            <div class="card flex md:flex-1 w-full flex-col justify-between border-2 border-plum-600 rounded text-gray-200">
                <header class="font-bold text-3xl bg-plum-600 py-4">E-commerce</header>
                <div class="card-content p-4">
                    <p class="py-2 text-sm"> 1st year hosting/domain name FREE</p>
                    <p class="text-3xl font-semibold py-4">
                        £2,999+
                    </p>
                    <p class="">
                        Advanced + Shop/Payments (<a href="#" data-id="modal-features" class="modal-trigger relative text-plum-200 primary-link underline">feature list</a>)
                    </p>
                </div>
                <footer class="bg-plum-400 py-3 items-end rounded-b">
                    <div class="flex my-3 justify-center">
                        <a class="js-slidein relative inline-flex pr-8 primary-btn hover:bg-plum-600 bg-plum-700 group" href="/services/web-package?plan=ecommerce">Select<svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-1 top-3 right-1 inline-block transform group-hover:rotate-360 transition-rotate duration-500 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>

        </div>
    </section>

    <!-- INLCUDES -->
    <section id="includes-web" class="pb-28 px-4 md:px-10 bg-plum-500">
        <h1 class="text-3xl text-center pt-10">All sites include:</h1>
        <p class="text-sm text-center pb-10">
            All features <a href="#" class="modal-trigger relative text-plum-200 primary-link underline text-sm" data-id="modal-features">in website packages</a>
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-flow-row gap-4 max-w-5xl mx-auto">

            <div class="flex text-gray-200">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>

                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Professional web design</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">All websites are bespoke designs incorporating your existing logo and brand. We adhere to UX / UI best practices with SEO in mind creating a clean interface with structured goals and navigation.</p>
                    </div>
                </div>

            </div>


            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>

                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Responsive design</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">Using a mobile first approach we develop all sites to be as fast a possible on mobile and adjusts across multiple screens sizes and browsers delivering a great experience whatever the device.</p>
                    </div>
                </div>

            </div>

            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>

                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">SSL certificates</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">Security is of utmost importance, we include a free SSL security certificate with every site that sites on our secure servers using TLS network protocol to establish an encrypted connection. This also improves search engine performance.</p>
                    </div>
                </div>

            </div>

            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>


                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Search Engine Optimization</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">We use tried and tested SEO techniques to give your site the edge in all the popular search engines. Adding sitemaps and crafting content/structure we help you increase your online presence in major search engines.</p>
                    </div>
                </div>

            </div>


            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                </svg>


                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Hosting &amp; Domain</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">We deploy and host your website to our secure UK servers once design and build are complete. All our packages include the first year of hosting and domain name FREE so you dont need to worry about additional costs.</p>
                    </div>
                </div>

            </div>

            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>


                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Maintenance &amp; Backups</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">Websites should rarely have downtime, but just in case we store monthly backups of your website allowing us to restore your website in case of emergency. Our server have 99.9% network uptime, so not need to worry.</p>
                    </div>
                </div>
            </div>

            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
                </svg>


                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Ongoing support</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">You receive support for all your services with us by email or mobile 24/7, and we enjoy going the extra mile to resolve requests within a 24hrs. We won't leave you in the lurch.</p>
                    </div>
                </div>
            </div>

            <div class="flex text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>


                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Content management system</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">All sites come CMS ready so content management is simplified and easily scalable. We offer demos and tutorials on blogging &amp; making changes if you need guidance. Alternatively, join our maintenance packages and, we will make changes for you.</p>
                    </div>
                </div>
            </div>

            <div class="flex text-gray-200">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-plum-700 flex-none w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>

                <div class="flex flex-col pl-3">
                    <header class="font-bold uppercase text-xl text-plum-700">Analytics &amp; tags</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">We can set-up tools like 'Google Analytics' and 'Google Search Console' for you. Also, any other tracking or social media tags required can be implemented using Google Tag Manager for maintainability.</p>
                    </div>
                </div>
            </div>

            <!-- <div class="text-gray-200 border-2 border-gray-200 rounded-md">

                <div class="flex flex-col p-6">
                    <header class="font-bold uppercase text-xl text-plum-700">Full plan features</header>
                    <div class="card-content pb-2">
                        <p class="leading-5 text-sm">Extra features are avaiable to some plans. See full <a href="#" class="modal-trigger relative text-plum-700 primary-link underline" data-id="modal-features">feature list</a> for more info.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- FAQS -->
    <?php get_template_part('templates/partials/section', 'faqs-shortcut');
    ?>


    <!-- TECH STACK -->
    <?php get_template_part('templates/partials/section', 'tech-stack');
    ?>

</div>

<!-- FEATURES MODAL -->
<?php get_template_part('templates/partials/section', 'features-modal');
?>


<?php get_footer(); ?>