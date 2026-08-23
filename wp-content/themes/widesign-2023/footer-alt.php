<!-- Site footer -->
<footer class="bg-gray-900 footer">
    <div class="flex sm:flex-row flex-wrap justify-center link-items">

        <div class="gap-10 grid grid-cols-1 md:grid-cols-2 grid-flow-grid px-2 py-20 w-full text-center">

            <!-- EXISTING CLIENTS -->
            <div class="px-2 w-full text-center">
                <h2 class="pb-2 font-semibold text-mellow-400 text-3xl lg:text-4xl uppercase">
                    Elsewhere
                </h2>
                <ul class="leading-3">
                    <li><a class="md:text-base text-2xl footer-link" href="/services">Services</a></li>
                    <li><a class="md:text-base text-2xl footer-link" href="/our-work">Our work</a></li>
                    <li><a class="md:text-base text-2xl footer-link" href="/services/free-website-audit">Website audit</a></li>
                    <li><a class="md:text-base text-2xl footer-link" href="/hub">The 'Hub'</a></li>

                </ul>
            </div>

            <div class="px-2 w-full text-center">
                <h2 class="pb-2 font-semibold text-mellow-400 text-3xl lg:text-4xl uppercase">
                    In touch
                </h2>

                <ul class="leading-3">
                    <li><a class='md:text-base text-2xl footer-link' href='tel:<?php echo do_shortcode("[mobile_number]"); ?>'><?php echo do_shortcode("[mobile_number]"); ?></a>
                    </li>
                    <li>
                        <a class='md:text-base text-2xl footer-link' href='mailto:<?php echo do_shortcode("[main_email]"); ?>'><?php echo do_shortcode("[main_email]"); ?></a>
                    </li>
                    <li><a class="md:text-base text-2xl footer-link" href="/client-area">Existing clients</a></li>
                    <li><a class="md:text-base text-2xl footer-link" href="/wp-admin">Admin</a></li>
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
