<!-- Site footer -->
<footer class="footer pt-14 pb-4">
    <div class="lg:container lg:mx-auto pb-10">

        <div class="link-items flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-2 text-white space-y-14 md:space-y-0">
            <div class="sm:w-full p-0 sm:p-24">
                <!-- <img class="m-auto hidden md:block" src="/resources/img/pages/logos/redhill-tuts-logo-inverted-sm.svg" alt="Redhill Tutoring" width="340px" height="auto"> -->
                <img class="m-auto" src="/resources/img/pages/logos/redhill-tuts-logo-inverted-sm.png" alt="Redhill Tutoring" width="340px" height="auto">

            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="text-base font-semibold text-gray-400 uppercase mb-2 pl-0">Get in touch</h3>
                <ul>
                    <li><a class='footer-link' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'><?php echo do_shortcode("[mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='footer-link' href='mailto:<?php echo do_shortcode("[main_email]"); ?>'>Email Bethany</a>
                    </li>
                    <li>
                        <a class='footer-link' href="/contact#contact-form">Contact form</a>
                    </li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">
                <h3 class="text-base font-semibold text-gray-400 uppercase mb-2 pl-0">Company</h3>
                <ul>
                    <li><a class="footer-link" href="/testimonials">Testimonials</a></li>
                    <li><a class="footer-link" href="/company-policy">Company Policies</a></li>
                    <li><a class="footer-link" href="/session-booking">Booking Sessions</a></li>
                    <li><a class="footer-link" href="/site-map">Sitemap</a></li>
                </ul>
            </div>

            <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">

                <h3 class="text-base font-semibold text-gray-400 uppercase mb-2 pl-0">Accredited</h3>
                <div class="">
                    <img class="h-20 md:h-16 w-auto mx-auto pb-2" src="/resources/img/pages/logos/partners/uni-surrey.png" alt="University of Surrey">
                    <img class="h-20 md:h-16 w-auto mx-auto pb-2" src="/resources/img/pages/logos/partners/edexcel.png" alt="edexcel">
                    <img class="h-16 w-auto mx-auto rounded-sm" src="/resources/img/pages/logos/partners/cache.png" alt="cache">
                </div>

            </div>

            <!-- <div class="sm:w-1/4 p-0 text-xs sm:p-1 text-center">

                <h3 class="text-base font-semibold text-white mb-3 pl-0">Social media</h3>
                <div class="">
                    <?php // get_template_part('templates/partials/social/footer', 'icons'); 
                    ?>
                </div>
            </div> -->


        </div>

    </div>
    <div class="pt-10 container mx-auto text-center">
        <div class="fb-like" data-href="https://www.facebook.com/redhill.tutoring/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

    </div>

    <?php get_template_part('templates/partials/copyright'); ?>
    </div>


    <!-- MODAL OVERLAY -->
    <!-- <div id="modal-overlay" class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-700 bg-opacity-50 ">
    </div> -->

</footer>

<?php get_template_part('templates/partials/document-close');
