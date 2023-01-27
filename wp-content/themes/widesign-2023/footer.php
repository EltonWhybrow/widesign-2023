<!-- Site footer -->
<footer class="footer bg-gray-900">
    <div class="py-20">

        <div class="space-y-5 sm:space-y-0 divide-y sm:divide-y-0 sm:divide-x divide-dashed divide-gray-700 link-items justify-center flex sm:flex-row flex-wrap items-center sm:items-start">

            <!-- EXISTING CLIENTS -->
            <div class="w-64 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    Existing clients
                </h2>

                <ul>
                    <li><a class="footer-link" href="/client-area">Client area</a></li>
                    <!-- <li><a class="footer-link" href="/client-area">Support</a></li> -->
                </ul>
            </div>

            <div class="w-64 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    Get in touch
                </h2>

                <ul>
                    <li><a class='footer-link' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'><?php echo do_shortcode("[mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='footer-link' href='mailto:<?php echo do_shortcode("[main_email]"); ?>'><?php echo do_shortcode("[main_email]"); ?></a>
                    </li>
                </ul>
            </div>




        </div>

    </div>


    <!-- <ul>
        <li><a class="footer-link" href="/testimonials">Testimonials</a></li>
        <li><a class="footer-link" href="/company-policy">Company Policies</a></li>
        <li><a class="footer-link" href="/session-booking">Booking Sessions</a></li>
        <li><a class="footer-link" href="/site-map">Sitemap</a></li>
    </ul> -->

    </div>


    <!-- MODAL OVERLAY -->
    <!-- <div id="modal-overlay" class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-blue-700 bg-opacity-50 ">
    </div> -->

</footer>

<?php get_template_part('templates/partials/document-close');
