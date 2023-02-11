<!-- Site footer -->
<footer class="footer bg-gray-900">
    <div class="py-20">

        <div class="space-y-5 md:space-y-0 link-items justify-center flex sm:flex-row flex-wrap items-center sm:items-start">

            <!-- EXISTING CLIENTS -->
            <div class="w-full md:w-64 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    Elsewhere
                </h2>
                <ul class="leading-3">
                    <li><a class="footer-link text-2xl md:text-base" href="/services">Services</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/our-work">Our work</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/services/free-website-audit">Website audit</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/hub">The 'Hub'</a></li>

                </ul>
            </div>

            <div class="w-full md:w-64 px-10 text-center">
                <h2 class="text-4xl text-mellow-400 uppercase font-semibold pb-2">
                    In touch
                </h2>

                <ul class="leading-3">
                    <li><a class='footer-link text-2xl md:text-base' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'><?php echo do_shortcode("[mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='footer-link text-2xl md:text-base' href='mailto:<?php echo do_shortcode("[main_email]"); ?>'><?php echo do_shortcode("[main_email]"); ?></a>
                    </li>
                    <li><a class="footer-link text-2xl md:text-base" href="/client-area">Existing clients</a></li>
                    <li><a class="footer-link text-2xl md:text-base" href="/wp-admin">Admin</a></li>
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
